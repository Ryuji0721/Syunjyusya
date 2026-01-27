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
        </a>
    </div>
</main>

<?php get_footer(); ?>
