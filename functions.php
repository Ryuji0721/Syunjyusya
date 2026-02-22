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
function add_company_history_metabox( $post_type, $post ) {
    // 企業情報ページ（スラッグ: company）のみ沿革メタボックスを表示
    if ( $post_type === 'page' ) {
        $slug = '';
        if ( isset( $post ) && $post instanceof WP_Post ) {
            $slug = get_page_uri( $post->ID );
        }
        if ( $slug === 'company' ) {
            add_meta_box(
                'company_history_metabox',
                '沿革',
                'company_history_metabox_callback',
                'page',
                'normal',
                'high'
            );
        }
    }
}
add_action( 'add_meta_boxes', 'add_company_history_metabox', 10, 2 );

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
                        <label>タイトル</label><br>
                        <textarea name="history_main[]" rows="3"><?php echo esc_textarea( $item['main'] ); ?></textarea>
                    </p>
                    <button type="button" class="button button-secondary remove-history-item">削除</button>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <button type="button" id="add-history-item" class="button button-primary">沿革を追加</button>

    <script>
    jQuery(document).ready(function($) {
        // 年フォームに対して「年」を自動付与
        function formatYearInput() {
            $('input[name="history_year[]"]').each(function() {
                var value = $(this).val().trim();
                if (value && !value.endsWith('年')) {
                    // 数字のみを抽出
                    var numOnly = value.replace(/[^0-9]/g, '');
                    if (numOnly) {
                        $(this).val(numOnly + '年');
                    }
                }
            });
        }

        // フォーカスが外れた時に「年」を付与
        $(document).on('blur', 'input[name="history_year[]"]', function() {
            var value = $(this).val().trim();
            if (value && !value.endsWith('年')) {
                var numOnly = value.replace(/[^0-9]/g, '');
                if (numOnly) {
                    $(this).val(numOnly + '年');
                }
            }
        });

        $('#add-history-item').click(function() {
            var html = '<div class="history-item-input">' +
                '<p><label>年</label><br><input type="text" name="history_year[]" value="" placeholder="例：1929"></p>' +
                '<p><label>タイトル</label><br><textarea name="history_main[]" rows="3"></textarea></p>' +
                '<button type="button" class="button button-secondary remove-history-item">削除</button>' +
                '</div>';
            $('#history-items-container').append(html);
        });

        $(document).on('click', '.remove-history-item', function() {
            $(this).closest('.history-item-input').remove();
        });

        // 初期読み込み時も年フォームをフォーマット
        formatYearInput();
    });
    </script>
    <?php
}

function save_company_history_metabox( $post_id ) {
    // 企業情報ページ（スラッグ: company）以外は保存しない
    $post = get_post( $post_id );
    if ( ! $post || get_page_uri( $post_id ) !== 'company' ) {
        return;
    }
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

// 店舗情報カスタム投稿タイプの追加
function syunjyusya_register_store_post_type() {
    $labels = array(
        'name' => '店舗情報',
        'singular_name' => '店舗',
        'add_new' => '新規追加',
        'add_new_item' => '新規店舗を追加',
        'edit_item' => '店舗情報を編集',
        'new_item' => '新規店舗',
        'view_item' => '店舗情報を表示',
        'search_items' => '店舗情報を検索',
        'not_found' => '店舗情報が見つかりません',
        'not_found_in_trash' => 'ゴミ箱内に店舗情報が見つかりません',
        'all_items' => '店舗一覧',
        'menu_name' => '店舗情報',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-store',
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => false, // ブロックエディタ無効
    );
    register_post_type('store', $args);
}
add_action('init', 'syunjyusya_register_store_post_type');

// 店舗情報カスタムフィールド追加
function syunjyusya_add_store_meta_boxes() {
    add_meta_box(
        'store_info_metabox',
        '店舗詳細情報',
        'syunjyusya_store_info_metabox_callback',
        'store',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'syunjyusya_add_store_meta_boxes');

function syunjyusya_store_info_metabox_callback($post) {
    wp_nonce_field('syunjyusya_store_info_nonce', 'syunjyusya_store_info_nonce');
    $address = get_post_meta($post->ID, '_store_address', true);
    $tel = get_post_meta($post->ID, '_store_tel', true);
    $hours = get_post_meta($post->ID, '_store_hours', true);
    ?>
    <p>
        <label>住所</label><br>
        <input type="text" name="store_address" value="<?php echo esc_attr($address); ?>" style="width:100%;">
    </p>
    <p>
        <label>電話番号</label><br>
        <input type="text" name="store_tel" value="<?php echo esc_attr($tel); ?>" style="width:100%;">
    </p>
    <p>
        <label>営業時間</label><br>
        <input type="text" name="store_hours" value="<?php echo esc_attr($hours); ?>" style="width:100%;">
    </p>
    <?php
}

function syunjyusya_save_store_info_metabox($post_id) {
    if (!isset($_POST['syunjyusya_store_info_nonce']) || !wp_verify_nonce($_POST['syunjyusya_store_info_nonce'], 'syunjyusya_store_info_nonce')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (isset($_POST['store_address'])) {
        update_post_meta($post_id, '_store_address', sanitize_text_field($_POST['store_address']));
    }
    if (isset($_POST['store_tel'])) {
        update_post_meta($post_id, '_store_tel', sanitize_text_field($_POST['store_tel']));
    }
    if (isset($_POST['store_hours'])) {
        update_post_meta($post_id, '_store_hours', sanitize_text_field($_POST['store_hours']));
    }
}
add_action('save_post_store', 'syunjyusya_save_store_info_metabox');

// 店舗情報にマップ情報フィールド追加
function syunjyusya_add_store_map_metabox($post) {
    wp_nonce_field('syunjyusya_store_map_nonce', 'syunjyusya_store_map_nonce');
    $map = get_post_meta($post->ID, '_store_map', true);
    echo '<p><label>マップ情報（Googleマップ埋め込みURLや住所など）</label><br>';
    echo '<input type="text" name="store_map" value="' . esc_attr($map) . '" style="width:100%;"></p>';
}

function syunjyusya_store_map_metabox_setup() {
    add_meta_box(
        'store_map_metabox',
        'マップ情報',
        'syunjyusya_add_store_map_metabox',
        'store',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'syunjyusya_store_map_metabox_setup');

function syunjyusya_save_store_map_metabox($post_id) {
    if (!isset($_POST['syunjyusya_store_map_nonce']) || !wp_verify_nonce($_POST['syunjyusya_store_map_nonce'], 'syunjyusya_store_map_nonce')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (isset($_POST['store_map'])) {
        update_post_meta($post_id, '_store_map', sanitize_text_field($_POST['store_map']));
    }
}
add_action('save_post_store', 'syunjyusya_save_store_map_metabox');

// 店舗情報に画像アップロードフィールド追加
function syunjyusya_add_store_image_metabox($post) {
    wp_nonce_field('syunjyusya_store_image_nonce', 'syunjyusya_store_image_nonce');
    $webp = get_post_meta($post->ID, '_store_image_webp', true);
    $jpg = get_post_meta($post->ID, '_store_image_jpg', true);
    ?>
    <p><label>店舗画像（jpg/jpeg推奨）</label><br>
        <input type="text" name="store_image_jpg" id="store_image_jpg" value="<?php echo esc_attr($jpg); ?>" style="width:80%;">
        <button type="button" class="button" id="store_image_jpg_upload">アップロード</button>
    </p>
    <p style="color:#888;">※jpg画像をアップロードすると自動でwebpも生成されます。webp優先で表示されます。</p>
    <script>
    jQuery(document).ready(function($){
        function mediaUploader(targetInput) {
            var custom_uploader = wp.media({
                title: '画像を選択',
                button: { text: 'この画像を使う' },
                multiple: false
            })
            .on('select', function() {
                var attachment = custom_uploader.state().get('selection').first().toJSON();
                $(targetInput).val(attachment.url.replace('<?php echo get_site_url(); ?>/', ''));
            })
            .open();
        }
        $('#store_image_jpg_upload').on('click', function(e){
            e.preventDefault();
            mediaUploader('#store_image_jpg');
        });
    });
    </script>
    <?php
}

function syunjyusya_store_image_metabox_setup() {
    add_meta_box(
        'store_image_metabox',
        '店舗画像（webp/jpg）',
        'syunjyusya_add_store_image_metabox',
        'store',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'syunjyusya_store_image_metabox_setup');

function syunjyusya_save_store_image_metabox($post_id) {
    if (!isset($_POST['syunjyusya_store_image_nonce']) || !wp_verify_nonce($_POST['syunjyusya_store_image_nonce'], 'syunjyusya_store_image_nonce')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // 画像パスが入力されていれば必ず保存
    $webp = isset($_POST['store_image_webp']) ? trim($_POST['store_image_webp']) : '';
    $jpg = isset($_POST['store_image_jpg']) ? trim($_POST['store_image_jpg']) : '';
    if ($webp !== '') {
        update_post_meta($post_id, '_store_image_webp', sanitize_text_field($webp));
    }
    if ($jpg !== '') {
        update_post_meta($post_id, '_store_image_jpg', sanitize_text_field($jpg));
    }
}
add_action('save_post_store', 'syunjyusya_save_store_image_metabox');

// 画像アップロード時にwebp自動生成＆パス自動入力
function syunjyusya_generate_webp_on_upload($metadata, $attachment_id) {
    $file = get_attached_file($attachment_id);
    $info = pathinfo($file);
    $ext = strtolower($info['extension']);
    if ($ext === 'jpg' || $ext === 'jpeg') {
        $webp_path = $info['dirname'] . '/' . $info['filename'] . '.webp';
        // 既にwebpが存在しない場合のみ生成
        if (!file_exists($webp_path)) {
            if (function_exists('imagecreatefromjpeg') && function_exists('imagewebp')) {
                $img = imagecreatefromjpeg($file);
                if ($img) {
                    imagewebp($img, $webp_path, 100);
                    imagedestroy($img);
                }
            }
        }
        // 店舗情報投稿ならwebpパスを自動入力
        $post_id = isset($_REQUEST['post_id']) ? intval($_REQUEST['post_id']) : 0;
        if ($post_id && get_post_type($post_id) === 'store') {
            $upload_dir = wp_upload_dir();
            $rel_webp = str_replace($upload_dir['basedir'] . '/', '', $webp_path);
            update_post_meta($post_id, '_store_image_webp', $rel_webp);
            update_post_meta($post_id, '_store_image_jpg', $metadata['file']);
        }
    }
    return $metadata;
}
add_filter('wp_generate_attachment_metadata', 'syunjyusya_generate_webp_on_upload', 10, 2);

// 店舗情報初期登録（ページ読み込み時に一度だけ実行）
function syunjyusya_store_initial_import() {
    if (!is_admin()) return;
    $flag = get_option('syunjyusya_store_imported');
    if ($flag) return;
    $stores = [
        [
            'title' => '春秋舎　本店',
            'address' => '茨城県日立市鹿島町1-20-3',
            'image' => '本店.jpg',
        ],
        [
            'title' => 'エル・フラワー（スーパーかわねや南高野店内）',
            'address' => '茨城県日立市南高野町２丁目１−１',
            'image' => 'エルフラワー.jpg',
        ],
        [
            'title' => 'フラワーエル（ヒタチエ1F(旧イトーヨーカ堂)）',
            'address' => '茨城県日立市幸町１丁目１６−１',
            'image' => 'フラワーエール.jpg',
        ],
        [
            'title' => 'フローラ諏訪店（スーパーマルト諏訪店内）',
            'address' => '茨城県日立市諏訪町1-18-10',
            'image' => 'Suwa.jpg',
        ],
        [
            'title' => 'フローラ那珂店（スーパーマルト那珂店内）',
            'address' => '茨城県那珂市菅谷1587-1',
            'image' => 'Naka.jpg',
        ],
        [
            'title' => 'フローラ滑川店（スーパーマルト滑川店内）',
            'address' => '茨城県日立市滑川町2-12-1',
            'image' => 'Namegawa.jpg',
        ],
        [
            'title' => 'フローラ塙山店（スーパーマルト塙山店内）',
            'address' => '茨城県日立市金沢町4-1-20',
            'image' => 'Hanayama.jpg',
        ],
        [
            'title' => 'フローラ平沢店（スーパーマルト平沢店内）',
            'address' => '茨城県日立市高鈴町2-4-3',
            'image' => 'Hirasawa.jpg',
        ],
        [
            'title' => 'フローラ森山店（スーパーマルト森山店内）',
            'address' => '茨城県日立市森山町2-24-1',
            'image' => 'Moriyama.jpg',
        ],
    ];
    foreach ($stores as $store) {
        // 重複防止
        $exists = get_posts([
            'post_type' => 'store',
            'title' => $store['title'],
            'post_status' => 'any',
            'numberposts' => 1,
        ]);
        if ($exists) continue;
        $post_id = wp_insert_post([
            'post_title' => $store['title'],
            'post_type' => 'store',
            'post_status' => 'publish',
        ]);
        if ($post_id) {
            update_post_meta($post_id, '_store_address', $store['address']);
            // アイキャッチ画像は手動で設定してください
        }
    }
    update_option('syunjyusya_store_imported', 1);
}
add_action('admin_init', 'syunjyusya_store_initial_import');
