<section class="flower-usages" id="flower-usages">
  <h2 class="company-section-title">ご用途で選ぶ</h2>

  <?php
  $usage_terms = get_terms([
    'taxonomy' => 'flower_usage',
    'hide_empty' => false,
  ]);

  if (!is_wp_error($usage_terms) && $usage_terms): ?>
    <div class="flower-grid">
      <?php foreach ($usage_terms as $term):
        $img_id = (int) get_term_meta($term->term_id, 'flower_usage_image_id', true);
        $img_url = $img_id
          ? wp_get_attachment_image_url($img_id, 'large')
          : get_template_directory_uri() . '/assets/images/dummy.jpg';

        $link = get_term_link($term);
      ?>
        <a href="<?php echo esc_url($link); ?>" class="grid-item">
          <div class="grid-img-wrapper">
            <img
              src="<?php echo esc_url($img_url); ?>"
              alt="<?php echo esc_attr($term->name); ?>"
              loading="lazy"
              decoding="async"
            >
            <div class="grid-overlay">
              <span class="grid-label">
                <?php echo esc_html($term->name); ?>
              </span>
            </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <p class="flower-intro-para">
    日立市内の配達は、3,000円（税別）以上の商品から無料で配達いたします。
  </p>
</section>
