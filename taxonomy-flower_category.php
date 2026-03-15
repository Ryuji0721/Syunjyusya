<?php
get_header();
$term = get_queried_object();
?>

<main class="flower-page-container">
  <div class="flower-content-inner">
    <section class="flower-categories">
      <h2 class="company-section-title"><?php echo esc_html($term->name); ?></h2>

      <div class="flower-product-list">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <a class="flower-product-card" href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()): ?>
              <div class="flower-product-thumb"><?php the_post_thumbnail('large'); ?></div>
            <?php endif; ?>
            <div class="flower-product-meta">
              <p class="flower-product-title"><?php the_title(); ?></p>
              <!-- 価格は後でフィールド化 -->
            </div>
          </a>
        <?php endwhile; the_posts_pagination(); else: ?>
          <p>商品がありません。</p>
        <?php endif; ?>
      </div>

    </section>
  </div>
</main>

<?php get_footer(); ?>
