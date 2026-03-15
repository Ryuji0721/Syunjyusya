<?php
/*
Template Name: お花について
*/
get_header();
?>

<main class="flower-page-container">
    <div class="flower-hero-img-wrapper">
        <picture>
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top1.webp">
                    <source type="image/png"  srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top1.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top1.png"
                    alt="お花について"
                    loading="lazy" decoding="async"
                    class="flower-hero-img">
                </picture>
                 <div class="flower-hero-overlay">
                     <h1 class="flower-hero-title">お花について</h1>
                 </div>
            </div>
  <div class="flower-content-inner">

    <!-- カテゴリで選ぶ -->
    <section class="flower-categories" id="flower-categories">
      <h2 class="company-section-title">カテゴリで選ぶ</h2>

      <?php
      $cat_terms = get_terms([
        'taxonomy' => 'flower_category',
        'hide_empty' => false,
      ]);
      ?>

      <?php if (!is_wp_error($cat_terms) && $cat_terms): ?>
        <div class="flower-grid">
          <?php foreach ($cat_terms as $term):
            $img_id = (int) get_term_meta($term->term_id, 'flower_category_image_id', true);
            $img_url = $img_id ? wp_get_attachment_image_url($img_id, 'large') : get_template_directory_uri() . '/assets/images/dummy.jpg';
          ?>
            <!-- ★別ページに飛ばさず #products に飛ばす -->
            <a href="#products" class="grid-item js-flower-filter" data-tax="flower_category" data-term="<?php echo esc_attr($term->term_id); ?>">
              <div class="grid-img-wrapper">
                <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($term->name); ?>" loading="lazy" decoding="async">
                <div class="grid-overlay">
                  <span class="grid-label"><?php echo esc_html($term->name); ?></span>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </section>

    <!-- 用途で選ぶ -->
    <section class="flower-usages" id="flower-usages">
      <h2 class="company-section-title">ご用途で選ぶ</h2>

      <?php
      $usage_terms = get_terms([
        'taxonomy' => 'flower_usage',
        'hide_empty' => false,
      ]);
      ?>

      <?php if (!is_wp_error($usage_terms) && $usage_terms): ?>
        <div class="flower-grid">
          <?php foreach ($usage_terms as $term):
            $img_id = (int) get_term_meta($term->term_id, 'flower_usage_image_id', true);
            $img_url = $img_id ? wp_get_attachment_image_url($img_id, 'large') : get_template_directory_uri() . '/assets/images/dummy.jpg';
          ?>
            <a href="#products" class="grid-item js-flower-filter" data-tax="flower_usage" data-term="<?php echo esc_attr($term->term_id); ?>">
              <div class="grid-img-wrapper">
                <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($term->name); ?>" loading="lazy" decoding="async">
                <div class="grid-overlay">
                  <span class="grid-label"><?php echo esc_html($term->name); ?></span>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </section>

    <!-- 商品一覧（ここが押したら出るエリア） -->
    <section class="flower-products" id="products">
      <div class="flower-products-head">
        <h2 class="company-section-title">商品一覧</h2>

        <!-- リセット
        <button type="button" class="flower-filter-reset js-flower-reset">絞り込みを解除</button> -->

        <!-- 現在の条件表示 -->
        <p class="flower-filter-state js-flower-state" aria-live="polite"></p>
      </div>

      <?php
      $q = new WP_Query([
        'post_type' => 'flower_product',
        'post_status' => 'publish',
        'posts_per_page' => -1, // まず全件
        'orderby' => 'date',
        'order' => 'DESC',
      ]);
      ?>

      <?php if ($q->have_posts()): ?>
        <div class="flower-product-grid">
          <?php while ($q->have_posts()): $q->the_post();
            $post_id = get_the_ID();

            $cats = wp_get_post_terms($post_id, 'flower_category', ['fields' => 'ids']);
            $usgs = wp_get_post_terms($post_id, 'flower_usage', ['fields' => 'ids']);

            $price = get_post_meta($post_id, '_flower_price', true);
            $thumb = get_the_post_thumbnail_url($post_id, 'large');
            if (!$thumb) $thumb = get_template_directory_uri() . '/assets/images/dummy.jpg';
          ?>
            <a
              href="<?php the_permalink(); ?>"
              class="flower-product-card js-product-card"
              data-cat="<?php echo esc_attr(implode(',', array_map('intval', $cats))); ?>"
              data-usage="<?php echo esc_attr(implode(',', array_map('intval', $usgs))); ?>"
            >
              <div class="flower-product-img">
                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy" decoding="async">
              </div>

              <div class="flower-product-body">
                <p class="flower-product-title"><?php the_title(); ?></p>
                <?php if (!empty($price)): ?>
                  <p class="flower-product-price"><?php echo esc_html($price); ?></p>
                <?php endif; ?>
              </div>
            </a>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
      <?php else: ?>
        <p>商品がまだありません。</p>
      <?php endif; ?>

      <p class="flower-intro-para">
        日立市内の配達は、3,000円（税別）以上の商品から無料で配達いたします。
      </p>
    </section>

  </div>
</main>

<?php get_footer(); ?>
