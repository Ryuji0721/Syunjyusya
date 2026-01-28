<?php
function syunjyusya_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array(), null );

    // Swiper CSS
    wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0' );

    // テーマのメインCSS
    wp_enqueue_style( 'syunjyusya-style', get_stylesheet_uri(), array('swiper-style'), date('His') );

    // Swiper JS
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );

    // 自作初期化用JS
    wp_enqueue_script( 'custom-swiper', get_template_directory_uri() . '/assets/js/custom-swiper.js', array('swiper-js'), null, true );

    // メインのJS
    wp_enqueue_script( 'syunjyusya-main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'syunjyusya_enqueue_scripts' );

// ブロックエディタを無効化
add_filter( 'use_block_editor_for_post_type', '__return_false', 10 );

// 沿革カスタムメタボックス
function add_company_history_metabox() {
    add_meta_box(
        'company_history_metabox',
        '沿革',
        'company_history_metabox_callback',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'add_company_history_metabox' );

function company_history_metabox_callback( $post ) {
    wp_nonce_field( 'company_history_nonce', 'company_history_nonce' );
    
    $history_data = get_post_meta( $post->ID, '_company_history', true );
    if ( empty( $history_data ) ) {
        $history_data = array();
    }
    ?>
    <div id="history-items-container">
        <?php if ( ! empty( $history_data ) ) : ?>
            <?php foreach ( $history_data as $index => $item ) : ?>
                <div class="history-item-input">
                    <p>
                        <label>年</label><br>
                        <input type="text" name="history_year[]" value="<?php echo esc_attr( $item['year'] ); ?>">
                    </p>
                    <p>
                        <label>メイン内容</label><br>
                        <textarea name="history_main[]" rows="3"><?php echo esc_textarea( $item['main'] ); ?></textarea>
                    </p>
                    <p>
                        <label>サブ内容（オプション）</label><br>
                        <textarea name="history_sub[]" rows="3"><?php echo esc_textarea( $item['sub'] ); ?></textarea>
                    </p>
                    <button type="button" class="button button-secondary remove-history-item">削除</button>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <button type="button" id="add-history-item" class="button button-primary">沿革を追加</button>

    <script>
    jQuery(document).ready(function($) {
        $('#add-history-item').click(function() {
            var html = '<div class="history-item-input">' +
                '<p><label>年</label><br><input type="text" name="history_year[]" value=""></p>' +
                '<p><label>メイン内容</label><br><textarea name="history_main[]" rows="3"></textarea></p>' +
                '<p><label>サブ内容（オプション）</label><br><textarea name="history_sub[]" rows="3"></textarea></p>' +
                '<button type="button" class="button button-secondary remove-history-item">削除</button>' +
                '</div>';
            $('#history-items-container').append(html);
        });

        $(document).on('click', '.remove-history-item', function() {
            $(this).closest('.history-item-input').remove();
        });
    });
    </script>
    <?php
}

function save_company_history_metabox( $post_id ) {
    if ( ! isset( $_POST['company_history_nonce'] ) || ! wp_verify_nonce( $_POST['company_history_nonce'], 'company_history_nonce' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    $history_data = array();
    if ( isset( $_POST['history_year'] ) && is_array( $_POST['history_year'] ) ) {
        $years = array_map( 'sanitize_text_field', $_POST['history_year'] );
        $mains = isset( $_POST['history_main'] ) ? array_map( 'sanitize_textarea_field', $_POST['history_main'] ) : array();
        $subs = isset( $_POST['history_sub'] ) ? array_map( 'sanitize_textarea_field', $_POST['history_sub'] ) : array();

        foreach ( $years as $index => $year ) {
            if ( ! empty( $year ) ) {
                $history_data[] = array(
                    'year' => $year,
                    'main' => isset( $mains[ $index ] ) ? $mains[ $index ] : '',
                    'sub' => isset( $subs[ $index ] ) ? $subs[ $index ] : '',
                );
            }
        }
    }

    update_post_meta( $post_id, '_company_history', $history_data );
}
add_action( 'save_post_page', 'save_company_history_metabox' );
