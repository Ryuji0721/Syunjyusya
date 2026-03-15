<?php
/**
 * Theme functions
 */

/* ----------------------------
 * フロント側のCSS/JS
 * ---------------------------- */
function syunjyusya_theme_setup() {
  add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'syunjyusya_theme_setup');


function syunjyusya_enqueue_scripts() {
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap',
    [],
    null
  );

  wp_enqueue_style(
    'swiper-style',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
    [],
    '11.0.0'
  );

  wp_enqueue_style(
    'syunjyusya-style',
    get_stylesheet_uri(),
    ['swiper-style'],
    filemtime(get_stylesheet_directory() . '/style.css')
  );

  wp_enqueue_script(
    'swiper-js',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    [],
    '11.0.0',
    true
  );

  wp_enqueue_script(
    'custom-swiper',
    get_template_directory_uri() . '/assets/js/custom-swiper.js',
    ['swiper-js'],
    filemtime(get_template_directory() . '/assets/js/custom-swiper.js'),
    true
  );

  wp_enqueue_script(
    'syunjyusya-main',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    filemtime(get_template_directory() . '/assets/js/main.js'),
    true
  );
}
add_action('wp_enqueue_scripts', 'syunjyusya_enqueue_scripts');


/* ----------------------------
 * ブロックエディタ無効（必要なら）
 * ---------------------------- */
add_filter('use_block_editor_for_post_type', function ($use, $post_type) {
  if ($post_type === 'flower_product' || $post_type === 'page') return false;
  return $use;
}, 10, 2);

/* ----------------------------
 * 沿革カスタムメタボックス（JSバグ修正版）
 * ---------------------------- */
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
add_action('add_meta_boxes', 'add_company_history_metabox');

function company_history_metabox_callback($post) {
  wp_nonce_field('company_history_nonce', 'company_history_nonce');

  $history_data = get_post_meta($post->ID, '_company_history', true);
  if (empty($history_data)) $history_data = [];
  ?>
  <div id="history-items-container">
    <?php if (!empty($history_data)) : ?>
      <?php foreach ($history_data as $index => $item) : ?>
        <div class="history-item-input">
          <p>
            <label>年</label><br>
            <input type="text" name="history_year[]" value="<?php echo esc_attr($item['year']); ?>">
          </p>
          <p>
            <label>タイトル</label><br>
            <textarea name="history_main[]" rows="3"><?php echo esc_textarea($item['main']); ?></textarea>
          </p>
          <button type="button" class="button button-secondary remove-history-item">削除</button>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <button type="button" id="add-history-item" class="button button-primary">沿革を追加</button>

  <script>
    jQuery(function($) {
      function formatYearInput() {
        $('input[name="history_year[]"]').each(function() {
          var value = ($(this).val() || '').trim();
          if (!value) return;
          if (value.endsWith('年')) return;

          var numOnly = value.replace(/[^0-9]/g, '');
          if (numOnly) $(this).val(numOnly + '年');
        });
      }

      $(document).on('blur', 'input[name="history_year[]"]', function() {
        var value = ($(this).val() || '').trim();
        if (!value) return;
        var numOnly = value.replace(/[^0-9]/g, '');
        if (numOnly) $(this).val(numOnly + '年');
      });

      $('#add-history-item').on('click', function() {
        var html =
          '<div class="history-item-input">' +
            '<p><label>年</label><br><input type="text" name="history_year[]" value="" placeholder="例：1929"></p>' +
            '<p><label>タイトル</label><br><textarea name="history_main[]" rows="3"></textarea></p>' +
            '<button type="button" class="button button-secondary remove-history-item">削除</button>' +
          '</div>';
        $('#history-items-container').append(html);
      });

      $(document).on('click', '.remove-history-item', function() {
        $(this).closest('.history-item-input').remove();
      });

      formatYearInput();
    });
  </script>
  <?php
}

function save_company_history_metabox($post_id) {
  if (!isset($_POST['company_history_nonce']) || !wp_verify_nonce($_POST['company_history_nonce'], 'company_history_nonce')) return;
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
  if (!current_user_can('edit_post', $post_id)) return;

  $history_data = [];

  if (isset($_POST['history_year']) && is_array($_POST['history_year'])) {
    $years = array_map('sanitize_text_field', $_POST['history_year']);
    $mains = isset($_POST['history_main']) ? array_map('sanitize_textarea_field', $_POST['history_main']) : [];

    foreach ($years as $index => $year) {
      if (!empty($year)) {
        $history_data[] = [
          'year' => $year,
          'main' => $mains[$index] ?? '',
        ];
      }
    }
  }

  update_post_meta($post_id, '_company_history', $history_data);
}
add_action('save_post_page', 'save_company_history_metabox');


/* ----------------------------
 * お花：投稿タイプ＆タクソノミー
 * ---------------------------- */
add_action('init', function () {

    // 商品（カスタム投稿タイプ）
  register_post_type('flower_product', [
    'label' => 'お花商品',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    'rewrite' => ['slug' => 'flower-product'],
    'show_in_rest' => true,
  ]);

  // 花カテゴリ
  register_taxonomy('flower_category', 'flower_product', [
    'label' => '花カテゴリ',
    'public' => true,
    'hierarchical' => true,
    'rewrite' => ['slug' => 'flower-category'],
    'show_in_rest' => true,
  ]);

  // 用途
  register_taxonomy('flower_usage', 'flower_product', [
    'label' => '用途',
    'public' => true,
    'hierarchical' => true,
    'rewrite' => ['slug' => 'flower-usage'],
    'show_admin_column' => true,
    'show_in_rest' => true,
  ]);
});


/* ----------------------------
 * 価格メタ
 * ---------------------------- */
add_action('add_meta_boxes', function () {
  add_meta_box(
    'flower_product_price',
    '価格',
    function ($post) {
      $price = get_post_meta($post->ID, '_flower_price', true);
      echo '<label>表示価格（例：¥22,000〜）</label><br>';
      echo '<input type="text" style="width:100%" name="flower_price" value="'.esc_attr($price).'" />';
      echo '<p style="margin-top:8px;color:#666">一覧カードにも詳細にも使えます</p>';
    },
    'flower_product',
    'side',
    'default'
  );
});

add_action('save_post_flower_product', function ($post_id) {
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
  if (!current_user_can('edit_post', $post_id)) return;

  if (isset($_POST['flower_price'])) {
    update_post_meta($post_id, '_flower_price', sanitize_text_field($_POST['flower_price']));
  }
});

/* =========================================================
 * ターム画像：カテゴリ（flower_category）
 * ========================================================= */

// 追加画面
add_action('flower_category_add_form_fields', function () { ?>
  <div class="form-field term-group">
    <label for="flower_category_image_id">カテゴリ画像</label>
    <input type="hidden" id="flower_category_image_id" name="flower_category_image_id" value="">
    <div id="flower_category_image_preview" style="margin-top:10px;"></div>
    <button type="button" class="button" id="flower_category_image_upload">画像を選択</button>
    <button type="button" class="button" id="flower_category_image_remove" style="display:none;">削除</button>
    <p class="description">一覧のカテゴリカードに表示する画像</p>
  </div>
<?php });

// 編集画面
add_action('flower_category_edit_form_fields', function ($term) {
  $image_id = (int) get_term_meta($term->term_id, 'flower_category_image_id', true);
  $img = $image_id ? wp_get_attachment_image($image_id, 'medium', false, ['style'=>'max-width:240px;height:auto;border-radius:12px;']) : '';
  ?>
  <tr class="form-field term-group-wrap">
    <th scope="row"><label for="flower_category_image_id">カテゴリ画像</label></th>
    <td>
      <input type="hidden" id="flower_category_image_id" name="flower_category_image_id" value="<?php echo esc_attr($image_id); ?>">
      <div id="flower_category_image_preview" style="margin:10px 0;"><?php echo $img; ?></div>
      <button type="button" class="button" id="flower_category_image_upload">画像を選択</button>
      <button type="button" class="button" id="flower_category_image_remove" <?php if (!$image_id) echo 'style="display:none;"'; ?>>削除</button>
      <p class="description">一覧のカテゴリカードに表示する画像</p>
    </td>
  </tr>
<?php }, 10, 1);

// 保存
add_action('created_flower_category', function ($term_id) {
  if (isset($_POST['flower_category_image_id'])) {
    update_term_meta($term_id, 'flower_category_image_id', (int) $_POST['flower_category_image_id']);
  }
});
add_action('edited_flower_category', function ($term_id) {
  if (isset($_POST['flower_category_image_id'])) {
    update_term_meta($term_id, 'flower_category_image_id', (int) $_POST['flower_category_image_id']);
  }
});


/* =========================================================
 * ターム画像：用途（flower_usage） ← 追加分ここ
 * ========================================================= */

// 追加画面
add_action('flower_usage_add_form_fields', function () { ?>
  <div class="form-field term-group">
    <label for="flower_usage_image_id">用途画像</label>
    <input type="hidden" id="flower_usage_image_id" name="flower_usage_image_id" value="">
    <div id="flower_usage_image_preview" style="margin-top:10px;"></div>
    <button type="button" class="button" id="flower_usage_image_upload">画像を選択</button>
    <button type="button" class="button" id="flower_usage_image_remove" style="display:none;">削除</button>
    <p class="description">一覧の用途カードに表示する画像</p>
  </div>
<?php });

// 編集画面
add_action('flower_usage_edit_form_fields', function ($term) {
  $image_id = (int) get_term_meta($term->term_id, 'flower_usage_image_id', true);
  $img = $image_id ? wp_get_attachment_image($image_id, 'medium', false, ['style'=>'max-width:240px;height:auto;border-radius:12px;']) : '';
  ?>
  <tr class="form-field term-group-wrap">
    <th scope="row"><label for="flower_usage_image_id">用途画像</label></th>
    <td>
      <input type="hidden" id="flower_usage_image_id" name="flower_usage_image_id" value="<?php echo esc_attr($image_id); ?>">
      <div id="flower_usage_image_preview" style="margin:10px 0;"><?php echo $img; ?></div>
      <button type="button" class="button" id="flower_usage_image_upload">画像を選択</button>
      <button type="button" class="button" id="flower_usage_image_remove" <?php if (!$image_id) echo 'style="display:none;"'; ?>>削除</button>
      <p class="description">一覧の用途カードに表示する画像</p>
    </td>
  </tr>
<?php }, 10, 1);

// 保存
add_action('created_flower_usage', function ($term_id) {
  if (isset($_POST['flower_usage_image_id'])) {
    update_term_meta($term_id, 'flower_usage_image_id', (int) $_POST['flower_usage_image_id']);
  }
});
add_action('edited_flower_usage', function ($term_id) {
  if (isset($_POST['flower_usage_image_id'])) {
    update_term_meta($term_id, 'flower_usage_image_id', (int) $_POST['flower_usage_image_id']);
  }
});


/* ----------------------------
 * 管理画面：ターム画像のメディアアップローダ（カテゴリ＆用途 両対応）
 * ---------------------------- */
add_action('admin_enqueue_scripts', function ($hook) {
  if ($hook !== 'term.php' && $hook !== 'edit-tags.php') return;

  $taxonomy = $_GET['taxonomy'] ?? '';
  if (!in_array($taxonomy, ['flower_category', 'flower_usage'], true)) return;

  wp_enqueue_media();

  wp_add_inline_script('jquery-core', <<<JS
jQuery(function($){

  function setupTermImage(opts){
    const idField   = $(opts.idField);
    const preview   = $(opts.preview);
    const btnUpload = $(opts.btnUpload);
    const btnRemove = $(opts.btnRemove);
    const title     = opts.title;

    function refresh(){
      btnRemove.toggle(!!idField.val());
    }

    $(document).on('click', opts.btnUpload, function(e){
      e.preventDefault();
      const frame = wp.media({
        title: title,
        button: { text: 'この画像を使う' },
        multiple: false
      });

      frame.on('select', function(){
        const attachment = frame.state().get('selection').first().toJSON();
        idField.val(attachment.id);

        const url = (attachment.sizes && attachment.sizes.medium) ? attachment.sizes.medium.url : attachment.url;
        preview.html('<img src="'+url+'" style="max-width:240px;height:auto;border-radius:12px;" />');

        refresh();
      });

      frame.open();
    });

    $(document).on('click', opts.btnRemove, function(e){
      e.preventDefault();
      idField.val('');
      preview.empty();
      refresh();
    });

    refresh();
  }

  // カテゴリ
  setupTermImage({
    idField:   '#flower_category_image_id',
    preview:   '#flower_category_image_preview',
    btnUpload: '#flower_category_image_upload',
    btnRemove: '#flower_category_image_remove',
    title:     'カテゴリ画像を選択'
  });

  // 用途
  setupTermImage({
    idField:   '#flower_usage_image_id',
    preview:   '#flower_usage_image_preview',
    btnUpload: '#flower_usage_image_upload',
    btnRemove: '#flower_usage_image_remove',
    title:     '用途画像を選択'
  });

});
JS);
});


// お花商品：複数画像ギャラリー（_flower_gallery_ids）
add_action('add_meta_boxes', function () {
  add_meta_box(
    'flower_product_gallery',
    '商品画像（複数）',
    function ($post) {
      wp_nonce_field('flower_gallery_nonce', 'flower_gallery_nonce');

      $ids = get_post_meta($post->ID, '_flower_gallery_ids', true);
      $ids = is_string($ids) ? $ids : '';
      ?>
      <p style="margin:0 0 8px;color:#666;">複数選択できます。並び順＝表示順です。</p>

      <input type="hidden" id="flower_gallery_ids" name="flower_gallery_ids" value="<?php echo esc_attr($ids); ?>">

      <div id="flower_gallery_preview" style="display:flex;gap:10px;flex-wrap:wrap;margin:10px 0;">
        <?php
        if ($ids) {
          foreach (array_filter(array_map('intval', explode(',', $ids))) as $img_id) {
            $thumb = wp_get_attachment_image($img_id, 'thumbnail', false, [
              'style' => 'width:90px;height:90px;object-fit:cover;border-radius:10px;'
            ]);
            if ($thumb) echo $thumb;
          }
        }
        ?>
      </div>

      <button type="button" class="button" id="flower_gallery_select">画像を選択（複数可）</button>
      <button type="button" class="button" id="flower_gallery_clear" style="<?php echo $ids ? '' : 'display:none;'; ?>">クリア</button>
      <?php
    },
    'flower_product',
    'side',
    'default'
  );
});

add_action('save_post_flower_product', function ($post_id) {
  if (!isset($_POST['flower_gallery_nonce']) || !wp_verify_nonce($_POST['flower_gallery_nonce'], 'flower_gallery_nonce')) return;
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
  if (!current_user_can('edit_post', $post_id)) return;

  if (isset($_POST['flower_gallery_ids'])) {
    $raw = sanitize_text_field($_POST['flower_gallery_ids']);
    // 念のため数字とカンマだけにする
    $raw = preg_replace('/[^0-9,]/', '', $raw);
    update_post_meta($post_id, '_flower_gallery_ids', $raw);
  }
});

// メディア選択UI（管理画面側）
add_action('admin_enqueue_scripts', function ($hook) {
  // flower_product の編集画面だけで動かす
  $screen = function_exists('get_current_screen') ? get_current_screen() : null;
  if (!$screen || $screen->post_type !== 'flower_product') return;
  if ($hook !== 'post.php' && $hook !== 'post-new.php') return;

  wp_enqueue_media();

  wp_add_inline_script('jquery-core', <<<JS
jQuery(function($){
  function renderPreview(ids){
    const \$pv = $('#flower_gallery_preview');
    \$pv.empty();
    if(!ids.length){ $('#flower_gallery_clear').hide(); return; }

    ids.forEach(function(id){
      wp.media.attachment(id).fetch().then(function(){
        const att = wp.media.attachment(id).toJSON();
        const url = (att.sizes && att.sizes.thumbnail) ? att.sizes.thumbnail.url : att.url;
        \$pv.append('<img src="'+url+'" style="width:90px;height:90px;object-fit:cover;border-radius:10px;" />');
      });
    });
    $('#flower_gallery_clear').show();
  }

  $('#flower_gallery_select').on('click', function(e){
    e.preventDefault();
    const frame = wp.media({
      title: '商品画像を選択（複数可）',
      button: { text: 'この画像を使う' },
      multiple: true
    });

    frame.on('select', function(){
      const selection = frame.state().get('selection');
      const ids = selection.map(att => att.id);
      $('#flower_gallery_ids').val(ids.join(','));
      renderPreview(ids);
    });

    frame.open();
  });

  $('#flower_gallery_clear').on('click', function(e){
    e.preventDefault();
    $('#flower_gallery_ids').val('');
    $('#flower_gallery_preview').empty();
    $(this).hide();
  });
});
JS);
});

/* ----------------------------
 * 葬祭部ページ：お取引葬儀社様一覧 メタボックス
 * ---------------------------- */
function syunjyusya_add_funeral_clients_metabox() {
  add_meta_box(
    'funeral_clients_metabox',
    'お取引葬儀社様一覧',
    'syunjyusya_funeral_clients_metabox_callback',
    'page',
    'normal',
    'high'
  );
}
add_action('add_meta_boxes', 'syunjyusya_add_funeral_clients_metabox');

function syunjyusya_funeral_clients_metabox_callback($post) {
  $template = get_page_template_slug($post->ID);
  $slug = $post->post_name;

  // テンプレート指定 or スラッグ funeral のときに表示
  if ($template !== 'page-funeral.php' && $slug !== 'funeral') {
    echo '<p>この入力欄は「葬祭部について」ページで使用します。</p>';
    return;
  }

  wp_nonce_field('syunjyusya_funeral_clients_nonce', 'syunjyusya_funeral_clients_nonce');

  $clients = get_post_meta($post->ID, '_funeral_clients_list', true);
  $note    = get_post_meta($post->ID, '_funeral_clients_note', true);

  if (!is_string($clients)) $clients = '';
  if (!is_string($note)) $note = '(敬称略、順不同/2022年現在)';
  ?>
  <p>
    <label for="funeral_clients_note"><strong>注記</strong></label><br>
    <input
      type="text"
      id="funeral_clients_note"
      name="funeral_clients_note"
      value="<?php echo esc_attr($note); ?>"
      style="width:100%;"
    >
  </p>

  <p>
    <label for="funeral_clients_list"><strong>葬儀社一覧</strong></label><br>
    <textarea
      id="funeral_clients_list"
      name="funeral_clients_list"
      rows="15"
      style="width:100%;"
      placeholder="1行に1社ずつ入力してください&#10;例：&#10;茨城ひたちサービス&#10;多賀農協協同組合&#10;日立平和台霊園"
    ><?php echo esc_textarea($clients); ?></textarea>
  </p>

  <p style="color:#666; margin-top:8px;">
    1行に1社ずつ入力してください。改行ごとに一覧表示されます。
  </p>
  <?php
}

function syunjyusya_save_funeral_clients_metabox($post_id) {
  if (!isset($_POST['syunjyusya_funeral_clients_nonce']) ||
      !wp_verify_nonce($_POST['syunjyusya_funeral_clients_nonce'], 'syunjyusya_funeral_clients_nonce')) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
  if (!current_user_can('edit_post', $post_id)) return;

  $template = get_page_template_slug($post_id);
  $slug = get_post_field('post_name', $post_id);

  if ($template !== 'page-funeral.php' && $slug !== 'funeral') return;

  if (isset($_POST['funeral_clients_list'])) {
    $clients = sanitize_textarea_field($_POST['funeral_clients_list']);
    update_post_meta($post_id, '_funeral_clients_list', $clients);
  }

  if (isset($_POST['funeral_clients_note'])) {
    $note = sanitize_text_field($_POST['funeral_clients_note']);
    update_post_meta($post_id, '_funeral_clients_note', $note);
  }
}
add_action('save_post_page', 'syunjyusya_save_funeral_clients_metabox');
