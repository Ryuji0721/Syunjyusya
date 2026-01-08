<?php
/*
Template Name: Flower Page
*/
get_header(); ?>

<main class="flower-page-container">
    <div class="flower-content-inner">
        
        <!-- Hero Section -->
        <section class="flower-hero">
            <div class="flower-hero-img-wrapper">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top1.png" alt="お花について" class="flower-hero-img">
                 <div class="flower-hero-overlay">
                     <h1 class="flower-hero-title">お花について</h1>
                 </div>
            </div>
        </section>

        <!-- Intro Text -->
        <section class="flower-intro">
            <p class="flower-intro-para">
                日立市内の配達は、3,000円（税別）以上の商品から無料で配達いたします。
            </p>
            <p class="flower-intro-para">
                市外・県外への配達は、宅配または <a href="https://www.i-hana.co.jp/" target="_blank" class="flower-external-link">花キューピット <span class="external-icon">➚</span></a> で手配いたします。
            </p>
            <p class="flower-intro-para">
                <a href="https://www.instagram.com/shunjyusya/" target="_blank" class="flower-external-link">公式Instagram <span class="external-icon">➚</span></a> のDMでも注文を受け付けております。お気軽にご相談ください。
            </p>
            <p class="flower-intro-para">
                また、アンティーク雑貨を <a href="https://bloemen.official.ec/" target="_blank" class="flower-external-link">オンラインショップ bloemen <span class="external-icon">➚</span></a> で販売しております。ぜひご利用ください。
            </p>
        </section>

        <!-- Categories Section -->
        <section class="flower-categories">
            <h2 class="company-section-title">
                カテゴリで選ぶ <span class="chevron-down"></span>
            </h2>
            
            <div class="flower-grid">
                <!-- Item 1 -->
                <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iwaibana.jpg" alt="祝い花（スタンド花）">
                        <div class="grid-overlay">
                            <span class="grid-label">祝い花<br>(スタンド花)</span>
                        </div>
                    </div>
                </a>
                <!-- Item 2 -->
                <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hanataba.jpg" alt="花束">
                        <div class="grid-overlay">
                            <span class="grid-label">花束</span>
                        </div>
                    </div>
                </a>
                <!-- Item 3 -->
                <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flowerArenji.jpg" alt="フラワーアレンジメント">
                        <div class="grid-overlay">
                            <span class="grid-label">フラワー<br>アレンジメント</span>
                        </div>
                    </div>
                </a>
                <!-- Item 4 -->
                <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="造花">
                        <div class="grid-overlay">
                            <span class="grid-label">造花</span>
                        </div>
                    </div>
                </a>
                <!-- Item 5 -->
                <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Doraiflower.jpg" alt="ドライフラワー・リース">
                        <div class="grid-overlay">
                            <span class="grid-label">ドライフラワー /<br>リース</span>
                        </div>
                    </div>
                </a>
                <!-- Item 6 -->
                <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kanyousyokubutu.jpg" alt="観葉植物">
                        <div class="grid-overlay">
                            <span class="grid-label">観葉植物</span>
                        </div>
                    </div>
                </a>
                <!-- Item 7 -->
                <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Ha-barium.jpg" alt="ハーバリウム / ソープフラワー">
                        <div class="grid-overlay">
                            <span class="grid-label">ハーバリウム /<br>ソープフラワー</span>
                        </div>
                    </div>
                </a>
                <!-- Item 8 -->
                <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Anteak.jpg" alt="アンティーク雑貨">
                        <div class="grid-overlay">
                            <span class="grid-label">アンティーク雑貨</span>
                        </div>
                    </div>
                </a>
                <!-- Item 9 -->
                <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kisetu.jpg" alt="季節商品">
                        <div class="grid-overlay">
                            <span class="grid-label">季節商品</span>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- Usage Section -->
        <section class="flower-usages">
            <h2 class="company-section-title">
                ご用途で選ぶ <span class="chevron-down"></span>
            </h2>

            <div class="flower-grid">
                 <!-- Item 1 -->
                 <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kisetsugyouji.jpg" alt="季節行事">
                        <div class="grid-overlay">
                            <span class="grid-label">季節行事</span>
                        </div>
                    </div>
                </a>
                 <!-- Item 2 -->
                 <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Oiwai.jpg" alt="お祝い・お見舞い（出産・引越しなど）">
                        <div class="grid-overlay">
                            <span class="grid-label">お祝い・お見舞い<br>(出産・引越しなど)</span>
                        </div>
                    </div>
                </a>
                 <!-- Item 3 -->
                 <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Tanjyoubi.jpg" alt="お誕生日">
                        <div class="grid-overlay">
                            <span class="grid-label">お誕生日</span>
                        </div>
                    </div>
                </a>
                 <!-- Item 4 -->
                 <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kekkon.jpg" alt="結婚記念日・還暦">
                        <div class="grid-overlay">
                            <span class="grid-label">結婚記念日・還暦</span>
                        </div>
                    </div>
                </a>
                 <!-- Item 5 -->
                 <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Osonae.jpg" alt="お悔やみ・お供え">
                        <div class="grid-overlay">
                            <span class="grid-label">お悔やみ・お供え</span>
                        </div>
                    </div>
                </a>
                 <!-- Item 6 -->
                 <a href="#" class="grid-item">
                    <div class="grid-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kaiteniwai.jpg" alt="開店祝い・ご講演祝い">
                        <div class="grid-overlay">
                            <span class="grid-label">開店祝い・<br>ご講演祝い</span>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
