<?php
get_header();

if (have_posts()) :
  while (have_posts()) : the_post();

    $price = get_post_meta(get_the_ID(), '_flower_price', true);
    $care  = get_post_meta(get_the_ID(), '_flower_care', true);

    // ギャラリー（複数） IDs
    $raw_gallery = get_post_meta(get_the_ID(), '_flower_gallery_ids', true);

    if (is_array($raw_gallery)) {
      $gallery_ids = array_map('intval', $raw_gallery);
    } else {
      $raw_gallery = (string) $raw_gallery;
      $gallery_ids = $raw_gallery !== ''
        ? array_map('intval', preg_split('/\s*,\s*/', $raw_gallery, -1, PREG_SPLIT_NO_EMPTY))
        : [];
    }

    if (empty($gallery_ids) && has_post_thumbnail()) {
      $gallery_ids = [ get_post_thumbnail_id() ];
    }
?>

<main class="flower-product-detail">
  <div class="flower-content-inner">

    <header class="flower-detail-header">
      <h1 class="flower-detail-title"><?php the_title(); ?></h1>
    </header>

    <?php if (!empty($gallery_ids)) : ?>
      <div class="flower-gallery flower-gallery-swiper swiper">
        <div class="swiper-wrapper">
          <?php foreach ($gallery_ids as $img_id) : ?>
            <div class="swiper-slide">
              <?php echo wp_get_attachment_image($img_id, 'large', false, [
                'loading'  => 'lazy',
                'decoding' => 'async',
              ]); ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <p class="flower-gallery-note">画像をスワイプすると別の画像を見ることができます</p>
    <?php endif; ?>

    <?php if (!empty($price)) : ?>
      <p class="flower-detail-price"><?php echo esc_html($price); ?></p>
    <?php endif; ?>

    <section class="flower-detail-body">
      <h2 class="company-section-title">商品説明</h2>
      <div class="flower-detail-content">
        <?php the_content(); ?>
      </div>
    </section>

    <?php if (!empty($care)) : ?>
      <section class="flower-detail-care">
        <h2 class="company-section-title">お手入れ方法</h2>
        <div class="flower-detail-care-text">
          <?php echo wp_kses_post(wpautop($care)); ?>
        </div>
      </section>
    <?php endif; ?>

    <div class="flower-detail-footer">
      <a class="recruit-back-btn" href="<?php echo esc_url(home_url('/flower')); ?>">一覧へ戻る</a>
    </div>

  </div>
</main>

<?php
  endwhile;
endif;

get_footer();