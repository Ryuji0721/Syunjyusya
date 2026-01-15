<?php
/*
Template Name: Funeral Page
*/
get_header(); ?>

<main class="funeral-page-container">
    <div class="funeral-content-inner">
        
        <!-- Funeral Hero -->
        <section class="funeral-hero">
            <div class="funeral-hero-img-wrapper">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousaiFV.jpg" alt="葬祭部について" class="funeral-hero-img">
                 <div class="funeral-hero-overlay">
                     <h1 class="funeral-hero-title">葬祭部について</h1>
                 </div>
            </div>
        </section>

        <!-- Intro Text -->
        <section class="funeral-intro">
            <p class="funeral-intro-text">
                故人様のご冥福を祈り、ご当家のご要望に合わせ、<br>
                気持ちを込めて制作いたします。<br>
                生花祭壇の造形も、お客様のイメージに合ったお花<br>
                で設営いたします。
            </p>
        </section>

        <!-- Problems / Solutions Area -->
        <section class="funeral-problems">
            <h3 class="problems-title">こんなお悩みありませんか？</h3>
            <div class="problems-bubbles">
                <div class="bubble-item">
                    <span class="bubble-text">新しいアレンジの<br>提案をしたい</span>
                </div>
                <div class="bubble-item">
                    <span class="bubble-text">競合の葬儀会社と<br>差別化を図りたい</span>
                </div>
                <div class="bubble-item main-bubble">
                    <span class="bubble-text">花祭壇の<br>バリエーションを<br>増やしたい</span>
                </div>
            </div>
            
            <div class="problems-arrow">∨</div>

            <p class="problems-answer">
                葬儀会社様の様々なお悩みを解決できるよう<br>
                お手伝いいたします。<br>
                お気軽にご相談ください。
            </p>

            <div class="funeral-cta-wrapper">
                <a href="<?php echo home_url('/contact'); ?>" class="funeral-cta-btn">お問い合わせ ➜</a>
            </div>
        </section>

        <!-- Flow Section -->
        <section class="funeral-flow">
            <h2 class="company-section-title">ご依頼の流れ</h2>
            
            <div class="flow-steps">
                <!-- Step 1 -->
                <div class="flow-step">
                    <h4 class="flow-step-title">お問い合わせ</h4>
                    <p class="flow-step-desc">
                        まずはお電話またはお問い合わせフォームより<br>
                        ご連絡ください。<br>
                        ご葬儀の日程や会場、宗派、ご希望の祭壇など<br>
                        を伺い、適切なお提案をさせていただきます。
                    </p>
                </div>
                <div class="flow-arrow">▼</div>
                
                <!-- Step 2 -->
                <div class="flow-step">
                    <h4 class="flow-step-title">打ち合わせ</h4>
                    <p class="flow-step-desc">
                        ご希望に応じて、祭壇のデザインや使用する花<br>
                        材、色合いなどを詳細にお伺いします。<br>
                        会場の規模や搬入の可否などもレイアウト調整を<br>
                        行います。
                    </p>
                </div>
                <div class="flow-arrow">▼</div>
    
                <!-- Step 3 -->
                <div class="flow-step">
                    <h4 class="flow-step-title">お見積り・ご発注</h4>
                    <p class="flow-step-desc">
                        ご要望に沿ったプランのお見積もりを<br>
                        ご提示いたします。<br>
                        内容をご確認いただき、ご納得いただけましたら<br>
                        正式にご発注となります。
                    </p>
                </div>
            </div>

            <div class="flow-note">
                <p>
                    故人様への感謝と思いをカタチにする<br>
                    大切な空間だからこそ、<br>
                    一つひとつの提案を真心を込めて<br>
                    お作りしております。<br>
                    ご希望やご不明な点がございましたら、<br>
                    どんな些細なことでもお気軽にご相談ください。
                </p>
            </div>

            <div class="funeral-cta-wrapper">
                <a href="<?php echo home_url('/contact'); ?>" class="funeral-cta-btn">お問い合わせ ➜</a>
            </div>
        </section>

        <!-- Example Photos (Swiper Slider) -->
        <section class="funeral-examples">
            <h2 class="company-section-title">実例写真</h2>
            
            <div class="swiper funeral-examples-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousaibu1.jpg" alt="Funeral Example 1" class="example-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousaibu2.jpg" alt="Funeral Example 2" class="example-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousaibu3.jpg" alt="Funeral Example 3" class="example-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousaibu4.jpg" alt="Funeral Example 4" class="example-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousaibu5.jpg" alt="Funeral Example 5" class="example-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousaibu6.png" alt="Funeral Example 6" class="example-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousaibu7.jpg" alt="Funeral Example 7" class="example-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousaibu8.jpg" alt="Funeral Example 8" class="example-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousaibu9.jpg" alt="Funeral Example 9" class="example-img">
                    </div>
                </div>
            </div>

            <p class="example-note">写真を左右にスワイプしてご覧いただけます</p>
        </section>

        <!-- Client List -->
        <section class="funeral-clients">
            <h2 class="company-section-title">お取引葬儀社様一覧</h2>
            <ul class="client-list">
                <li class="list-note">(敬称略、順序不可/2022年現在)</li>
                <li>茨城ひたちサービス</li>
                <li>多賀農協協同組合</li>
                <li>日立平和台霊園</li>
                <li>神峰祭典</li>
                <li>松光社</li>
                <li>鈴木祭典</li>
                <li>さくら葬祭</li>
                <li>ワイズセレモニー式典</li>
                <li>木村葬祭</li>
                <li>セレモニー沙宝</li>
                <li>しんあい祭典</li>
                <li>三宝堂</li>
                <li>天尚堂</li>
                <li>陽光堂</li>
                <li>聖和</li>
                <li>里美斎場</li>
                <li>なか葬祭</li>
                <li>堀越葬儀社</li>
                <li>栗田商店</li>
            </ul>
        </section>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.funeral-examples-swiper', {
        loop: true,
        centeredSlides: true,
        slidesPerView: 1.2,
        spaceBetween: 20,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
               slidesPerView: 1.5,
               spaceBetween: 40,
            },
            // Explicitly disable for mobile if needed, though breakpoints usually override
            0: {
               autoplay: false
            },
            768: {
               autoplay: {
                   delay: 3000,
                   disableOnInteraction: false,
               }
            }
        }
    });
});
</script>

<?php get_footer(); ?>
