<?php
/*
Template Name: Interview 02 Page
*/
get_header(); ?>

<main class="interview-detail-page">
    <div class="interview-detail-inner">
        <!-- Hero Section -->
       <section class="interview-detail-hero">
    <div class="hero-img-placeholder">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousai_sigasan.jpg" alt="葬祭部志賀さんの写真">
    </div>
    <div class="hero-content">
        <h1 class="hero-main-title">作れるものが増えていくのがやりがい</h1>
        <p class="hero-author">葬祭部 志賀 大輝さん</p>
    </div>
</section>

        <!-- Q&A Section 1 -->
        <section class="interview-section">
            <h2 class="section-q-title">入社したきっかけは？</h2>
            <div class="section-a-text">
                <p>
                    他院期バイトに入ったときに、社員の誘いを受けたのがきっかけです。<br>
                    初めは、花屋に就職することを考えたこともなかったので悩みました。でもやってみると色々な花を使って一つのものを作ることに魅力を感じ、作る人によって個性が出るのも面白いなと思いました。<br>
                    職場の雰囲気もとても良く、やりがいを持って働けそうだと思い、入社を決めました。
                </p>
            </div>
        </section>

        <!-- Schedule Section -->
        <section class="interview-section">
            <h2 class="section-q-title">1日のスケジュールを教えてください</h2>
            <div class="schedule-timeline">
                <div class="schedule-item">
                    <div class="schedule-time">9:00</div>
                    <div class="schedule-content"><p>
                        ホワイトボード内容確認<br>
                        納品・回収準備
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">9:30</div>
                    <div class="schedule-content"><p>
                        祭壇や生花など必要なものを作る
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">12:00</div>
                    <div class="schedule-content"><p>
                        昼休憩
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">13:00</div>
                    <div class="schedule-content"><p>
                    13時告別の回収<br>
                    回収後、明日の式の納品
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">17:00</div>
                    <div class="schedule-content"><p>
                    自宅に花を持って行き、祭壇周りに飾る
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">18:00</div>
                    <div class="schedule-content">退勤</div>
                </div>
            </div>
            <p class="schedule-note">※当日のスケジュールによって時間・仕事内容の変動があります。</p>
        </section>

        <!-- Mid Photo -->
        <!-- <div class="interview-mid-photo">
            <div class="photo-placeholder">
                <p>仕事をしている様子などの写真</p>
            </div>
        </div> -->

        <!-- Q&A Section 2 -->
        <section class="interview-section">
            <h2 class="section-q-title">どんなところにやりがいを感じますか？</h2>
            <div class="section-a-text">
                <p>
                    祭壇から小物まで作るものがたくさんあり、練習をして技術を身につけ、作れるものを増やしていくことにやりがいを感じます。<br>
                    色合いや使う花など自分で色々考えながら作り、当家の方に喜んでもらえたときにやりがいを感じます。
                </p>
            </div>
        </section>

        <!-- Message Section -->
        <!-- <section class="interview-section">
            <h2 class="section-q-title">メッセージ</h2>
            <div class="section-a-text">
                <p>
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                    本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
                </p>
            </div>
        </section> -->

        <!-- Other Interviews Footer -->
        <a href="<?php echo home_url('/interview-01'); ?>" class="interview_1">
            <section class="interview-footer-nav">
                <h2 class="footer-nav-title">社員インタビュー</h2>
                <div class="other-interview-card">
                    <div class="nav-img-placeholder">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview_1.jpg" alt="インタビュー1">
                    </div>
                    <div class="nav-content">
                        <span class="nav-number">01</span>
                        <h3 class="nav-title">お客さんの喜ぶ顔がやりがい</h3>
                        <p class="nav-author">フローラ森山店 川崎 紗香さん</p>
                    </div>
                </div>
            </section>
        </a>
    </div>
</main>

<?php get_footer(); ?>
