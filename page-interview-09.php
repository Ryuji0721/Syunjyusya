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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousai_takeutisan.jpg" alt="葬祭部竹内さんの写真">
    </div>
    <div class="hero-content">
        <h1 class="hero-main-title">感謝の気持ちが返ってきたときにやりがいを感じる</h1>
        <p class="hero-author">葬祭部 竹内 亜紀子さん</p>
    </div>
</section>

        <!-- Q&A Section 1 -->
        <section class="interview-section">
            <h2 class="section-q-title">入社したきっかけは？</h2>
            <div class="section-a-text">
                <p>
                    求人サイトで求人情報を見て以前から興味のあった花に関われる仕事に就きたいと思い入社しました
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
                        日報の作成<br>
                        お別れ花の作成<br>
                        ゴミ箱回収<br>
                        祭壇の片付け
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">11:00</div>
                    <div class="schedule-content"><p>
                        オアシス詰め
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">12:00</div>
                    <div class="schedule-content"><p>
                        昼食をとりながら、電話対応<br>
                        昼食中でも依頼があれば平和台へ束を届ける
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">15:00</div>
                    <div class="schedule-content"><p>
                    名札を出す<br>
                    ボードに予定を書く<br>
                    束の製作<br>
                    祭壇の片付け<br>
                    生花の片付け<br>
                    納品書の作成次の府の自宅戻しの地図出し
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
                    自分のした仕事に対して感謝の気持ちが返ってきた時や葬祭部一丸となって季節の仕事や大きな仕事をやり遂げた時です。
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
        </a>
    </div>
</main>

<?php get_footer(); ?>
