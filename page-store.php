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
            
            <div class="store-grid">
                <div class="store-card" data-query="春秋舎 本店 茨城県日立市鹿島町1-20-3" style="cursor: pointer;">
                    <div class="store-card-name"><p>春秋舎　本店</p></div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/本店.jpg" alt="春秋舎 本店" class="store-card-img">
                    </div>
                </div>
                <div class="store-card" data-query="茨城県日立市南高野町２丁目１−１" style="cursor: pointer;">
                    <div class="store-card-name"><p>エル・フラワー（スーパーかわねや南高野店内）</p></div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/エルフラワー.jpg" alt="エルフラワー" class="store-card-img">
                    </div>
                </div>
                <div class="store-card" data-query="茨城県日立市幸町１丁目１６−１" style="cursor: pointer;">
                    <div class="store-card-name"><p>フラワーエル（ヒタチエ1F(旧イトーヨーカ堂)）</p></div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/フラワーエール.jpg" alt="フラワーエル" class="store-card-img">
                    </div>
                </div>
                <div class="store-card" data-query="フローラ諏訪店 茨城県日立市諏訪町1-18-10" style="cursor: pointer;">
                    <div class="store-card-name"><p>フローラ諏訪店（スーパーマルト諏訪店内）</p></div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Suwa.jpg" alt="フローラ諏訪店" class="store-card-img">
                    </div>
                </div>
                <div class="store-card" data-query="フローラ那珂店 茨城県那珂市菅谷1587-1" style="cursor: pointer;">
                    <div class="store-card-name"><p>フローラ那珂店（スーパーマルト那珂店内）</p></div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Naka.jpg" alt="フローラ那珂店" class="store-card-img">
                    </div>
                </div>
                <div class="store-card" data-query="フローラ滑川店 茨城県日立市滑川町2-12-1" style="cursor: pointer;">
                    <div class="store-card-name"><p>フローラ滑川店（スーパーマルト滑川店内）</p></div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Namegawa.jpg" alt="フローラ滑川店" class="store-card-img">
                    </div>
                </div>
                <div class="store-card" data-query="マルト塙山店 茨城県日立市金沢町4-1-20" style="cursor: pointer;">
                    <div class="store-card-name"><p>フローラ塙山店（スーパーマルト塙山店内）</p></div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hanayama.jpg" alt="フローラ塙山店" class="store-card-img">
                    </div>
                </div>
                <div class="store-card" data-query="フローラ平沢店 茨城県日立市高鈴町2-4-3" style="cursor: pointer;">
                    <div class="store-card-name"><p>フローラ平沢店（スーパーマルト平沢店内）</p></div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hirasawa.jpg" alt="フローラ平沢店" class="store-card-img">
                    </div>
                </div>
                <div class="store-card" data-query="フローラ森山店 茨城県日立市森山町2-24-1" style="cursor: pointer;">
                    <div class="store-card-name"><p>フローラ森山店（スーパーマルト森山店内）</p></div>
                    <div class="store-card-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Moriyama.jpg" alt="フローラ森山店" class="store-card-img">
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
