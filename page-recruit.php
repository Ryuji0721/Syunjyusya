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
            
            <div class="interview-grid">
                <a href="<?php echo home_url('/interview-01'); ?>" class="interview-card">
                    <div class="interview-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview_1.jpg" alt="Interview 1">
                        <span class="interview-number">01</span>
                    </div>
                    <p class="interview-title">お客さんの喜ぶ顔がやりがい</p>
                    <div class="interview-footer">
                        <span class="interview-name">フローラ森山店 川崎 紗香さん</span>
                        <span class="arrow-link">➜</span>
                    </div>
                </a>

                <a href="<?php echo home_url('/interview-02'); ?>" class="interview-card">
                    <div class="interview-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="Interview 2">
                        <span class="interview-number">02</span>
                    </div>
                    <p class="interview-title">タイトルタイトルタイトルタイトル</p>
                    <div class="interview-footer">
                        <span class="interview-name">部署名　名前 名前</span>
                        <span class="arrow-link">➜</span>
                    </div>
                </a>
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
