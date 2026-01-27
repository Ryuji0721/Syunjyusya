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
            <div class="swiper swiper-interview">
                <div class="swiper-wrapper">

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
    </div>
</main>

<?php get_footer(); ?>
