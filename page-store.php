<?php
/*
Template Name: Store Information
*/
get_header(); ?>

<main class="store-page-container">
    <div class="store-content-inner">
        
        <!-- Hero Section -->
        <section class="store-hero">
            <div class="store-hero-img-wrapper">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/本店.jpg" alt="店舗情報" class="store-hero-img">
                 <div class="store-hero-overlay">
                     <h1 class="store-hero-title">店舗情報</h1>
                 </div>
            </div>
        </section>

        <!-- Intro Text -->
        <section class="store-intro">
            <p class="store-intro-para">
                茨城県日立市を本店に10店舗の花屋を展開しています。お近くの店舗までぜひお立ち寄りください。
            </p>
            <p class="store-intro-para">
                お近くに店舗がない場合は、<a href="https://shunjusha.hanatown.net/" target="_blank" class="store-external-link">花キューピット</a> や <a href="https://www.instagram.com/shunjusha/" target="_blank"  rel="noopener noreferrer" class="store-external-link">Instagram</a> のDM注文受付をご利用ください。
            </p>
        </section>

        <!-- Map Search Section -->
        <section class="store-map-section">
            <h2 class="company-section-title">MAPから探す</h2>
            <div class="map-placeholder">
                <span class="map-label">MAP</span>
            </div>
        </section>

        <!-- Store Name Search Section -->
        <section class="store-list-section">
            <h2 class="company-section-title store-list-title">
                店舗名から探す
            </h2>
            
            <div class="store-grid">
                <div class="store-card">
                    <div class="store-card-name">春秋舎 本店</div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/本店.jpg" alt="春秋舎 本店" class="store-card-img">
                    </div>
                </div>
                <div class="store-card">
                    <div class="store-card-name">エルフラワー</div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/エルフラワー.jpg" alt="エルフラワー" class="store-card-img">
                    </div>
                </div>
                <div class="store-card">
                    <div class="store-card-name">フラワーエル</div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/フラワーエール.jpg" alt="フラワーエル" class="store-card-img">
                    </div>
                </div>
                <div class="store-card">
                    <div class="store-card-name">フローラ諏訪店</div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Suwa.jpg" alt="フローラ諏訪店" class="store-card-img">
                    </div>
                </div>
                <div class="store-card">
                    <div class="store-card-name">フローラ那珂店</div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Naka.jpg" alt="フローラ那珂店" class="store-card-img">
                    </div>
                </div>
                <div class="store-card">
                    <div class="store-card-name">フローラ滑川店</div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Namegawa.jpg" alt="フローラ滑川店" class="store-card-img">
                    </div>
                </div>
                <div class="store-card">
                    <div class="store-card-name">フローラ塙山店</div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hanayama.jpg" alt="フローラ塙山店" class="store-card-img">
                    </div>
                </div>
                <div class="store-card">
                    <div class="store-card-name">フローラ平沢店</div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hirasawa.jpg" alt="フローラ平沢店" class="store-card-img">
                    </div>
                </div>
                <div class="store-card">
                    <div class="store-card-name">フローラ森山店</div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Moriyama.jpg" alt="フローラ森山店" class="store-card-img">
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
