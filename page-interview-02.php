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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousai_aibasan.jpg" alt="フローラ森山店川崎さんの写真">
    </div>
    <div class="hero-content">
        <h1 class="hero-main-title">花に関わる仕事なら一生続けられる</h1>
        <p class="hero-author">葬祭部 愛場 理晴さん</p>
    </div>
</section>

        <!-- Q&A Section 1 -->
        <section class="interview-section">
            <h2 class="section-q-title">入社したきっかけは？</h2>
            <div class="section-a-text">
                <p>
                    22歳のときに職業安定所にて春秋舎と出会いました。<br>
                    前職の時は、玄関で門前払いなどのこともありましたが、花はもらって嫌な人はいないと悟り、花に関わる仕事なら一生続けられると思い入社しました。
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
                        出勤して朝礼 → そうじ<br>
                        ボードを確認<br>
                        納品・回収の準備
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">11:00</div>
                    <div class="schedule-content"><p>
                        明日以降の祭壇の作成<br>
                        生花の作成
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">12:00</div>
                    <div class="schedule-content"><p>
                        昼休憩
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">15:00</div>
                    <div class="schedule-content"><p>
                    帰社<br>    
                    現場にて納品・回収<br>
                        花を降ろす・束の作成<br>
                        明日の準備
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">18:00</div>
                    <div class="schedule-content">何もなければ退勤</div>
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
                    自分の頭の中で思い描いた通りに花が挿せた時に達成感を得られます。あとは、毎回あるわけではないですが、直接お客様に「綺麗な祭壇をありがとうございます」と喜んでもらえた時はやりがいを感じます。
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
        <section class="interview-footer-nav">
            <h2 class="footer-nav-title">社員インタビュー</h2>
            <div class="other-interview-card">
                <div class="nav-img-placeholder">        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/interview_1.jpg" alt="インタビュー1">
</div>
                <div class="nav-content">
                    <span class="nav-number">01</span>
                    <h3 class="nav-title">タイトルタイトルタイトルタイトルタイトル</h3>
                    <p class="nav-author">部署名　名前 名前</p>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
