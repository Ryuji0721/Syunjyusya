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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousai_kamosidasan.jpg" alt="葬祭部鴨志田さんの写真">
    </div>
    <div class="hero-content">
        <h1 class="hero-main-title">お花に囲まれた仕事</h1>
        <p class="hero-author">葬祭部 鴨志田 祐子さん</p>
    </div>
</section>

        <!-- Q&A Section 1 -->
        <section class="interview-section">
            <h2 class="section-q-title">入社したきっかけは？</h2>
            <div class="section-a-text">
                <p>
                    花屋さんに勤めていた経験もありまたお花に囲まれた仕事ができたら楽しいだろうなと思い働きたいと思ったのがきっかけです。
                </p>
            </div>
        </section>

        <!-- Schedule Section -->
        <section class="interview-section">
            <h2 class="section-q-title">1日のスケジュールを教えてください</h2>
            <div class="schedule-timeline">
                <div class="schedule-item">
                    <div class="schedule-time">10:00</div>
                    <div class="schedule-content"><p>
                        出社<br>
                        テナント売り場の水換え、補充<br>
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">11:00</div>
                    <div class="schedule-content"><p>
                        市場の処理<br>
                        市場から来た花の水揚げ、湯揚げなどの処理を行いキーパーに並べる
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">12:00</div>
                    <div class="schedule-content"><p>
                        午後からの市場に備える<br>
                        昼食
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">15:00</div>
                    <div class="schedule-content"><p>
                    不足しているものなどの準備<br>
                    （オアシスをベースに詰める、資材の整理整頓等々）
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">18:00</div>
                    <div class="schedule-content"><p>明日使用するものの下準備
                        掃き掃除<br>
                        配達対応
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
                    やりがいを感じるのは市場で入荷してきたお花の箱を開ける時です。色々な色や形のかわいい花がたくさんあり、生産者さんがつけた名前を見ながら箱を開ける瞬間が好きです。
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
