<?php
/*
Template Name: Recruit Page
*/
get_header(); ?>

<main class="recruit-page-container">
    <div class="recruit-content-inner">
        
        <!-- Recruit Hero -->
        <section class="recruit-hero">
            <div class="recruit-hero-img-wrapper">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kyujin.jpg" alt="求人情報" class="recruit-hero-img">
                 <div class="recruit-hero-overlay">
                     <h1 class="recruit-hero-title">求人情報</h1>
                 </div>
            </div>
        </section>

        <!-- Message Section -->
        <section id="message" class="recruit-message">
            <h2 class="company-section-title">メッセージ</h2>
            <div class="message-content">
                <p>
                    私たちはお客様に“ありがとう”を届ける会社です。<br><br>
                    葬祭部では、人生の最後をその方らしいお花で<br>
                    飾り、故人様を偲ぶご遺族の心に寄り添いながら、<br>
                    癒しと安心をお届けすることを使命としています。<br><br>
                    そして、生花部門では、日々の暮らしの中で大切な<br>
                    人への想いや季節の移ろいを花に込めて届ける<br>
                    こと。<br>
                    お祝いの席や、何気ない日常の贈り物にも、<br>
                    一つひとつのお花に心を込め、<br>
                    花の力で人の心を動かす仕事に取り組んでいます。<br><br>
                    “ありがとう”のかたちを、花を通して届けたい。<br>
                    そんな想いに共感していただける方を、私たちは<br>
                    お待ちしています。
                </p>
            </div>
        </section>

        <!-- Movie Section -->
        <section class="recruit-movie">
            <h2 class="company-section-title">イメージビデオ</h2>
            <div class="movie-container">
                 <video 
                    autoplay 
                    muted 
                    loop 
                    playsinline
                    class="recruit-video">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/movie/TOPFV1.mp4" type="video/mp4">
                </video>
            </div>
        </section>

        <!-- In-depth Sections (Interviews etc) -->
        <section id="interviews" class="recruit-interviews">
            <h2 class="company-section-title">社員インタビュー</h2>
            
            <div class="swiper swiper-interview">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="<?php echo home_url('/interview-01'); ?>" class="interview-card">
                            <div class="interview-img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview_1.jpg" alt="Interview 1">
                            <span class="interview-number">01</span>
                    </div>
                    <p class="interview-title">01 お客さんの喜ぶ顔がやりがい</p>
                    <div class="interview-footer">
                            <span class="interview-name">フローラ森山店 川崎 紗香さん</span>
                            <span class="arrow-link">➜</span>
                    </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="<?php echo home_url('/interview-02'); ?>" class="interview-card">
                        <div class="interview-img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview_2.jpg" alt="Interview 2">
                            <span class="interview-number">02</span>
                        </div>
                        <p class="interview-title">02 花に関わる仕事なら一生続けられる</p>
                        <div class="interview-footer">
                            <span class="interview-name">フローラ平沢店 Aさん</span>
                            <span class="arrow-link">➜</span>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="<?php echo home_url('/interview-03'); ?>" class="interview-card">
                        <div class="interview-img-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview_3.jpg" alt="Interview 3">
                            <span class="interview-number">03</span>
                        </div>
                        <p class="interview-title">03 憧れを追いかけて</p>
                        <div class="interview-footer">
                            <span class="interview-name">葬祭部 愛場 理晴さん</span>
                            <span class="arrow-link">➜</span>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="<?php echo home_url('/interview-04'); ?>" class="interview-card">
                        <div class="interview-img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview_4.jpg" alt="Interview 2">
                            <span class="interview-number">04</span>
                        </div>
                        <p class="interview-title">04 嬉しかった記憶を自分も提供したい</p>
                        <div class="interview-footer">
                            <span class="interview-name">フローラ滑川店 一関郷子さん</span>
                            <span class="arrow-link">➜</span>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="<?php echo home_url('/interview-05'); ?>" class="interview-card">
                        <div class="interview-img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview_5.jpg" alt="Interview 2">
                            <span class="interview-number">05</span>
                        </div>
                        <p class="interview-title">05 お客様の笑顔のために</p>
                        <div class="interview-footer">
                            <span class="interview-name">フローラ滑川店 加藤 志津子さん</span>
                            <span class="arrow-link">➜</span>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="<?php echo home_url('/interview-06'); ?>" class="interview-card">
                        <div class="interview-img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview_6.jpg" alt="Interview 6">
                            <span class="interview-number">06</span>
                        </div>
                        <p class="interview-title">06 お客様に幸せを届けられる仕事</p>
                        <div class="interview-footer">
                            <span class="interview-name">フローラ滑川店 鈴木 愛美さん</span>
                            <span class="arrow-link">➜</span>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="<?php echo home_url('/interview-07'); ?>" class="interview-card">
                        <div class="interview-img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview_7.jpg" alt="Interview 7">
                            <span class="interview-number">07</span>
                        </div>
                        <p class="interview-title">07 お花に囲まれた仕事</p>
                        <div class="interview-footer">
                            <span class="interview-name">葬祭部 鴨志田 祐子さん</span>
                            <span class="arrow-link">➜</span>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="<?php echo home_url('/interview-08'); ?>" class="interview-card">
                        <div class="interview-img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview_8.jpg" alt="Interview 8">
                            <span class="interview-number">08</span>
                        </div>
                        <p class="interview-title">08 作れるものが増えていくのがやりがい</p>
                        <div class="interview-footer">
                            <span class="interview-name">葬祭部 志賀 大輝さん</span>
                            <span class="arrow-link">➜</span>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="<?php echo home_url('/interview-09'); ?>" class="interview-card">
                        <div class="interview-img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview_9.jpg" alt="Interview 9">
                            <span class="interview-number">09</span>
                        </div>
                        <p class="interview-title">09 感謝の気持ちが返ってきたときにやりがいを感じる</p>
                        <div class="interview-footer">
                            <span class="interview-name">葬祭部 竹内 亜紀子さん</span>
                            <span class="arrow-link">➜</span>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="<?php echo home_url('/interview-10'); ?>" class="interview-card">
                        <div class="interview-img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview_10.jpg" alt="Interview 10">
                            <span class="interview-number">10</span>
                        </div>
                        <p class="interview-title">10 私にとってぴったりな場所</p>
                        <div class="interview-footer">
                            <span class="interview-name">葬祭部 B子さん</span>
                            <span class="arrow-link">➜</span>
                        </div>
                    </a>
                </div>

            </div>

        </section>

        <section id="guidelines" class="recruit-guidelines">
            <h2 class="company-section-title">募集要項</h2>
            <div class="department-guidelines">
                <h4 class="department-title">生花部</h4>
                <div class="guideline-buttons">
                    <a href="<?php echo home_url('/recruit-seika-part'); ?>" class="guideline-btn">パート ➜</a>
                    <a href="<?php echo home_url('/recruit-seika-full-page'); ?>" class="guideline-btn">正社員 ➜</a>
                </div>
            </div>
            <div class="department-guidelines">
                <h4 class="department-title">葬祭部</h4>
                <div class="guideline-buttons">
                    <a href="<?php echo home_url('/recruit-sousai-part'); ?>" class="guideline-btn">パート ➜</a>
                    <a href="<?php echo home_url('/recruit-sousai-full-page'); ?>" class="guideline-btn">正社員 ➜</a>
                </div>
            </div>
        </section>

        <section id="flow" class="recruit-flow">
            <h2 class="company-section-title">選考の流れ</h2>
            
            <!-- Part-time -->
            <div class="flow-dropdown active">
                <button class="flow-toggle">パートの場合 <span class="toggle-icon"></span></button>
                <div class="flow-content">
                    <div class="recruit-flow-box">
                        <h4 class="recruit-flow-title">ご応募</h4>
                        <p class="recruit-flow-text">採用サイトよりご応募ください。<br>こちらより折り返しご連絡いたします。</p>
                        <a href="<?php echo home_url('/contact'); ?>" class="recruit-flow-btn">採用サイトへ <span class="external-icon"></span></a>
                    </div>
                    <div class="recruit-flow-arrow"></div>
                    <div class="recruit-flow-box">
                        <h4 class="recruit-flow-title">面接</h4>
                        <p class="recruit-flow-text">社長との面接になります。<br>履歴書（写真貼付）をお持ちください。</p>
                    </div>
                    <div class="recruit-flow-arrow"></div>
                    <div class="recruit-flow-box">
                        <h4 class="recruit-flow-title">採用</h4>
                        <p class="recruit-flow-text">電話もしくはメールで合否をお伝えいたします。</p>
                    </div>
                </div>
            </div>

            <!-- Full-time -->
            <div class="flow-dropdown active">
                <button class="flow-toggle">正社員の場合 <span class="toggle-icon"></span></button>
                <div class="flow-content">
                    <div class="recruit-flow-box">
                        <h4 class="recruit-flow-title">ご応募</h4>
                        <p class="recruit-flow-text">採用サイトよりご応募ください。<br>こちらより折り返しご連絡いたします。</p>
                        <a href="<?php echo home_url('/contact'); ?>" class="recruit-flow-btn">採用サイトへ <span class="external-icon"></span></a>
                    </div>
                    <div class="recruit-flow-arrow"></div>
                    <div class="recruit-flow-box">
                        <h4 class="recruit-flow-title">面接</h4>
                        <p class="recruit-flow-text">社長との面接になります。<br>履歴書（写真貼付）をお持ちください。</p>
                    </div>
                    <div class="recruit-flow-arrow"></div>
                    <div class="recruit-flow-box">
                        <h4 class="recruit-flow-title">採用</h4>
                        <p class="recruit-flow-text">電話もしくはメールで合否をお伝えいたします。</p>
                    </div>
                    <div class="recruit-flow-arrow"></div>
                    <div class="recruit-flow-box">
                        <h4 class="recruit-flow-title">研修期間・面談・正社員雇用</h4>
                        <p class="recruit-flow-text">研修3ヶ月を受けていただいた後、会社との面談<br>を経て、正社員雇用となります。</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggles = document.querySelectorAll('.flow-toggle');
    toggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const parent = this.parentElement;
            parent.classList.toggle('active');
        });
    });
});
</script>

<?php get_footer(); ?>
