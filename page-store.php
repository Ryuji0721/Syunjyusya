<?php
/*
Template Name: Store Information
*/
get_header(); ?>

<main class="store-page-container">
    <div class="store-hero-img-wrapper">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/本店.jpg" alt="店舗情報" class="store-hero-img">
                 <div class="store-hero-overlay">
                     <h1 class="store-hero-title">店舗情報</h1>
                 </div>
            </div><div class="store-content-inner">
        
        <!-- Hero Section -->
        <section class="store-hero">
            
        </section>

        <!-- Intro Text -->
        <section class="store-intro" id="store-intro">
            <p class="store-intro-para">
                茨城県日立市を本店に10店舗の花屋を展開しています。お近くの店舗までぜひお立ち寄りください。
            </p>
            <p class="store-intro-para">
                お近くに店舗がない場合は、<a href="https://shunjusha.hanatown.net/" target="_blank" class="store-external-link">花キューピット<span class="link_img"></span></a> や <a href="https://www.instagram.com/shunjusha/" target="_blank"  rel="noopener noreferrer" class="store-external-link">Instagram<span class="link_img"></span></a> のDM注文受付をご利用ください。
            </p>
        </section>

        <!-- Map Search Section -->
        <section class="store-map-section" id="store-map-section">
            <h2 class="company-section-title">MAPから探す</h2>
            <div class="map-placeholder" style="padding:0; overflow:hidden;">
                <iframe id="storeMapFrame" width="100%" height="100%" frameborder="0" style="border:0; width:100%; height:100%;" 
                    src="https://maps.google.com/maps?q=春秋舎+本店+茨城県日立市鹿島町1-20-3&t=&z=15&ie=UTF8&iwloc=&output=embed" allowfullscreen>
                </iframe>
            </div>
        </section>

        <!-- Store Name Search Section -->
        <section class="store-list-section" id="store-list-section">
            <h2 class="company-section-title store-list-title">
                店舗名から探す
            </h2>
            <?php
            $args = array(
                'post_type' => 'store',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
            );
            $store_query = new WP_Query($args);
            $main_store = null;
            $other_stores = array();
            if ($store_query->have_posts()) :
                while ($store_query->have_posts()) : $store_query->the_post();
                    if (strpos(get_the_title(), '本店') !== false) {
                        $main_store = $post;
                    } else {
                        $other_stores[] = $post;
                    }
                endwhile;
                // 本店を先頭、他をあいうえお順で並べる
                $ordered_stores = array();
                if ($main_store) {
                    $ordered_stores[] = $main_store;
                }
                // あいうえお順（title昇順）
                usort($other_stores, function($a, $b) {
                    return strcmp($a->post_title, $b->post_title);
                });
                $ordered_stores = array_merge($ordered_stores, $other_stores);
                echo '<div class="store-grid">';
                foreach ($ordered_stores as $store_post) :
                    setup_postdata($store_post);
                    $img = get_post_meta($store_post->ID, '_store_image_jpg', true);
                    $webp = get_post_meta($store_post->ID, '_store_image_webp', true);
                    $img_url = '';
                    $webp_url = '';
                    if ($img) {
                        if (strpos($img, 'http') === 0) {
                            $img_url = $img;
                        } elseif (strpos($img, 'wp-content/') === 0) {
                            $img_url = site_url('/') . $img;
                        } elseif (preg_match('/^\d{4}\/\d{2}\//', $img)) {
                            $img_url = site_url('/wp-content/uploads/' . ltrim($img, '/'));
                        } else {
                            $img_url = get_template_directory_uri() . '/' . ltrim($img, '/');
                        }
                    }
                    if ($webp) {
                        if (strpos($webp, 'http') === 0) {
                            $webp_url = $webp;
                        } elseif (strpos($webp, 'wp-content/') === 0) {
                            $webp_url = site_url('/') . $webp;
                        } elseif (preg_match('/^\d{4}\/\d{2}\//', $webp)) {
                            $webp_url = site_url('/wp-content/uploads/' . ltrim($webp, '/'));
                        } else {
                            $webp_url = get_template_directory_uri() . '/' . ltrim($webp, '/');
                        }
                    }
                    ?>
                    <div class="store-card" style="display:flex; flex-direction:column; justify-content:stretch; aspect-ratio:1/1; border-radius:18px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.08); padding:0; margin:0; background:#fff;">
                        <div class="store-card-name" style="flex:1 1 33%; display:flex; align-items:center; justify-content:left; padding:0 0.8em; font-size:14px; color:#7a2222; background:transparent; margin:0; border-radius:0;">
                            <p style="margin:0; width:100%; text-align:left; font-weight:400; letter-spacing:0.08em;"><?php echo esc_html(get_the_title($store_post)); ?></p>
                        </div>
                        <div class="store-card-img-wrapper" style="flex:2 1 67%; width:100%; height:0; min-height:0; aspect-ratio:4/3; position:relative; margin:0; padding:0; overflow:hidden; border-radius:0 0 18px 18px;">
                            <picture style="width:100%; height:100%; display:block;">
                                <?php if ($webp_url): ?>
                                    <source srcset="<?php echo esc_url($webp_url); ?>" type="image/webp">
                                <?php endif; ?>
                                <?php if ($img_url): ?>
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(get_the_title($store_post)); ?>" class="store-card-img" style="width:100%; height:100%; object-fit:cover; display:block; margin:0; padding:0; border-radius:0 0 18px 18px; position:absolute; top:0; left:0;">
                                <?php else: ?>
                                    <img src="" alt="画像なし" class="store-card-img" style="width:100%; height:100%; object-fit:cover; display:block; margin:0; padding:0; border-radius:0 0 18px 18px; position:absolute; top:0; left:0;">
                                <?php endif; ?>
                            </picture>
                            <div style="font-size:12px; color:#888; word-break:break-all; background:#fff; opacity:0.8; padding:2px 4px; position:relative; z-index:2;">
                                <span>img_url: <?php echo htmlspecialchars($img_url); ?></span><br>
                                <span>webp_url: <?php echo htmlspecialchars($webp_url); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
                echo '</div>';
                wp_reset_postdata();
            else :
                echo '<p>店舗情報がありません。</p>';
            endif;
            ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>
