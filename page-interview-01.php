<?php
/*
Template Name: Interview 01 Page
*/
get_header(); ?>

<main class="interview-detail-page">
    <div class="interview-detail-inner">
        <!-- Hero Section -->
      <section class="interview-detail-hero">
    <div class="hero-img-placeholder">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/moriyama_kawasakisan.jpg" alt="フローラ森山店川崎さんの写真">
    </div>
    <div class="hero-content">
        <h1 class="hero-main-title">お客さんの喜ぶ顔がやりがい</h1>
        <p class="hero-author">フローラ森山店 川崎 紗香さん</p>
    </div>
</section>


        <!-- Q&A Section 1 -->
        <section class="interview-section">
            <h2 class="section-q-title">入社したきっかけは？</h2>
            <div class="section-a-text">
                <p>
                    母の影響で、物心ついた頃から花に興味がありました。<br>
                    お花について詳しくなりたいということと、お花に携わる仕事がしたい気持ちがあり、入社を決めました。
                </p>
            </div>
        </section>

        <!-- Schedule Section -->
        <section class="interview-section">
            <h2 class="section-q-title">1日のスケジュールを教えてください</h2>
            <div class="schedule-timeline">
                <div class="schedule-item">
                    <div class="schedule-time">9:00</div>
                    <div class="schedule-content">
                        <p>
                            開店の準備<br>
                            （鉢物の水やり・鉢物の束のチェック）<br>
                            店前、グリーン、ミニブーケ束作成<br>
                            注文作成
                        </p>
                    </div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">11:00</div>
                    <div class="schedule-content"><p>
                        店前、グリーン、ミニブーケ、キーパーの水替え<br>
                        （曜日によって違う）
                    </p>
                    </div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">12:00</div>
                    <div class="schedule-content"><p>市場の日はイメージ葉とキーパー内を確認し、仕入れを行う。</p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">15:00</div>
                    <div class="schedule-content"><p>新しい花材を入れる為、キーパー内の整理<br>
                        接客、注文作成、店内清掃</p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">18:00</div>
                    <div class="schedule-content"><p>
                        30分〜1時間おきに束チェックと作成を行う。<br>
                        閉店の準備（レジの精算、鉢物片付け）<br>
                        店内清掃
                    </p></div>
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
                   お客様の要望に合わせて花束やアレンジメントを作成し、手渡した際に「喜んでくれているところ」を見た時が一番やりがいを感じます。<br>
                    お客様の笑顔を見ることができると、もっと技術を上げたいと思います。
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
                <div class="nav-img-placeholder"></div>
                <div class="nav-content">
                    <span class="nav-number">02</span>
                    <h3 class="nav-title">タイトルタイトルタイトルタイトルタイトル</h3>
                    <p class="nav-author">部署名　名前 名前</p>
                    <a href="<?php echo home_url('/interview-02'); ?>" class="nav-arrow-link">➜</a>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
