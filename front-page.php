<?php
/*
Template Name: Top page
*/
 get_header(); ?>

    <main>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-visual-wrapper">
                    <video 
                        autoplay 
                        muted 
                        loop 
                        playsinline
                        class="hero-video">
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/movie/TOPFV1.mp4" type="video/mp4">
                    </video>
                </a>
            </div>
            
            <div class="scroll-indicator">
                <span class="scroll-text">scroll</span>
                <div class="scroll-line-wrapper">
                    <div class="scroll-line"></div>
                    <div class="scroll-arrow"></div>
                </div>
            </div>
        </section>
        
        <!-- Omoi Section -->
        <section class="omoi-section" id="omoi-section">
            <!-- Background Image -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top1.png" alt="Omoi Background" class="omoi-bg-img">
            
            <h2 class="omoi-title">想い</h2>
            <!-- Background Image Area (CSS or IMG?) - Using CSS bg for text overlay usually, but user asked for "Images areas". 
                 For "Omoi", the text is ON TOP of the image. 
                 To keep it simple for "replacing image", let's make the background an <img>? 
                 No, standard web practice for text-on-image is background-image. 
                 But to make it "easy to replace", an <img> with absolute positioning is often better for CMS users if not using custom fields.
                 Let's stick to the current "color bg" for Omoi as the user didn't explicitly ask to change Omoi's structure, 
                 but replacing the "Service" dummies is critical. 
                 Actually, the Omoi section in the design is a Background Image. 
                 Let's add a wrapper <img> for Omoi background for consistency if requested.
                 "Images areas just replace" -> Let's do it for Service/Funeral/Hero first as they are discrete visuals. 
                 Omoi is a text-overlay section. I'll stick to CSS or a contained img. 
                 Let's focus on Hero, Service, Funeral, Delivery. -->
            
            <div class="omoi-content">
                <p class="omoi-lead">
                    毎日の暮らしを美しく彩る花で、<br>
                    心地よい暮らしを
                </p>
                <p class="omoi-text">
                    笑顔のこぼれる、お客様の顔がみたいから。<br>
                    国内外から常に新鮮な花を厳選して入荷し、心を込めて皆様にお届けします。<br>
                    切り花、観葉植物・花苗など新鮮な旬の花を常時揃えるよう心がけています。
                </p>
                <p class="omoi-text">
                    気持ちが伝わる素敵なお花を多数取り揃えてお待ちしております。<br>
                    どんな花がいいかな？など、気になることがございましたら、お気軽にスタッフにお声かけください。<br>
                    各店舗スタッフ、心よりお待ちしております。
                </p>
            </div>
        </section>

        <!-- Service Section -->
        <section class="service-section" id="service-section">
            <div class="section-header">
                <p class="section-subtitle-en">Service</p>
                <h2 class="section-title-ja">事業内容</h2>
            </div>

            <!-- Block 1: Flower Sales -->
            <div class="service-block">
                <h3 class="service-block-title">各種お花販売</h3>
                <!-- Refactored to IMG -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top2.png" alt="Flower Sales" class="service-img">
                
                <p class="service-text">
                    お誕生日・各種お祝いやプレゼントなどのお花の贈り物を心を込めて販売しています。<br>
                    茨城県日立市を本店に10店舗の花屋を展開しています。<br>
                    お近くの店舗までぜひお立ち寄りください。
                </p>
                <div class="service-btn-wrapper right">
                    <a href="<?php echo home_url('/store'); ?>" class="service-btn">店舗情報</a>
                </div>
            </div>

            <!-- Block 2: Funeral Dept -->
            <div class="service-block">
                <h3 class="service-block-title">葬祭部［会社様向け］</h3>
                <!-- Refactored to IMG -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/topSousai.png" alt="Funeral Dept" class="service-img">
                
                <p class="service-text">
                    最後のお別れの場にふさわしい空間をお花でデザインします。<br>
                    故人様のご冥福を祈り、ご当家のご要望に合わせ、気持ちを込めて制作いたします。
                </p>
                <div class="service-btn-wrapper right">
                    <a href="<?php echo home_url('/funeral'); ?>" class="service-btn">葬祭部について</a>
                </div>
            </div>
        </section>

        <!-- Delivery / Payment Section -->
        <section class="delivery-section" id="delivery-section">
            <div class="delivery-header">
                <p class="section-subtitle-en">Delivery, payment</p>
                <h2 class="section-title-ja">配送・支払い情報</h2>
            </div>

            <!-- Deco Top Left -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top4bara.png" alt="Tulips" class="deco-img top-left">

            <div class="delivery-content">
                <p class="service-text">
                    日立市内の配達は、3,000円（税別）以上商品から無料で配達いたします。<br>
                    市外・県外への配達は、宅配または花キューピットで手配いたします。
                </p>
                
                <div class="service-btn-wrapper right">
                    <a href="#" class="service-btn">花キューピット</a>
                </div>

                <div class="payment-info">
                    <p class="service-text">
                        クレジットカード決済<br>
                        Visa/Masters/Amex/Diners/JCB/Discoverがご利用になれます。<br>
                        ご注文後即時決済されます。
                    </p>
                </div>
            </div>

            <!-- Deco Bottom Right -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/toplast.png" alt="Daisies" class="deco-img bottom-right">
        </section>

    </main>



<?php get_footer(); ?>
