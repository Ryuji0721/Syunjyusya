<?php
/*
Template Name: Interview 02 Page
*/
get_header(); ?>

<main class="interview-detail-page">
    <div class="interview-detail-inner">
        <!-- Hero Section -->
        <section class="interview-detail-hero">
            <div class="hero-content">
                <h1 class="hero-main-title">タイトルタイトルタイトルタイトルタイトルタイトル</h1>
                <p class="hero-author">部署名　名前 名前</p>
            </div>
            <div class="hero-img-placeholder">
                <!-- Image will be here -->
            </div>
        </section>

        <!-- Q&A Section 1 -->
        <section class="interview-section">
            <h2 class="section-q-title">入社したきっかけは？</h2>
            <div class="section-a-text">
                <p>
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                </p>
            </div>
        </section>

        <!-- Schedule Section -->
        <section class="interview-section">
            <h2 class="section-q-title">1日のスケジュールを教えてください</h2>
            <div class="schedule-timeline">
                <div class="schedule-item">
                    <div class="schedule-time">9:00</div>
                    <div class="schedule-content">仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容</div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">11:00</div>
                    <div class="schedule-content">仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容</div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">12:00</div>
                    <div class="schedule-content">仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容</div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">15:00</div>
                    <div class="schedule-content">仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容</div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">18:00</div>
                    <div class="schedule-content">仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容仕事内容</div>
                </div>
            </div>
            <p class="schedule-note">※当日のスケジュールによって時間・仕事内容の変動があります。</p>
        </section>

        <!-- Mid Photo -->
        <div class="interview-mid-photo">
            <div class="photo-placeholder">
                <p>仕事をしている様子などの写真</p>
            </div>
        </div>

        <!-- Q&A Section 2 -->
        <section class="interview-section">
            <h2 class="section-q-title">どんなところにやりがいを感じますか？</h2>
            <div class="section-a-text">
                <p>
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                </p>
            </div>
        </section>

        <!-- Message Section -->
        <section class="interview-section">
            <h2 class="section-q-title">メッセージ</h2>
            <div class="section-a-text">
                <p>
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                </p>
            </div>
        </section>

        <!-- Other Interviews Footer -->
        <section class="interview-footer-nav">
            <h2 class="footer-nav-title">社員インタビュー</h2>
            <div class="other-interview-card">
                <div class="nav-img-placeholder"></div>
                <div class="nav-content">
                    <span class="nav-number">01</span>
                    <h3 class="nav-title">タイトルタイトルタイトルタイトルタイトル</h3>
                    <p class="nav-author">部署名　名前 名前</p>
                    <a href="<?php echo home_url('/interview-01'); ?>" class="nav-arrow-link">➜</a>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
