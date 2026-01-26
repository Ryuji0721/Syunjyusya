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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sousai_Bkosan.jpg" alt="葬祭部B子さんの写真">
    </div>
    <div class="hero-content">
        <h1 class="hero-main-title">私にとってぴったりな場所</h1>
        <p class="hero-author">葬祭部 B子さん</p>
    </div>
</section>

        <!-- Q&A Section 1 -->
        <section class="interview-section">
            <h2 class="section-q-title">入社したきっかけは？</h2>
            <div class="section-a-text">
                <p>
                    色々経験してきた中で、自分が今どこでどんな仕事をしているのかちゃんと説明できるところで働きたいと思うようになりました。花屋は単純明快で、わかりやすく親しみやすく私にとってはぴったりな場所でした。
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
                        当日の情報収集（※必要な時な前日から）<br>
                        配達予定の把握・手配<br>
                        翌日の配達・来店予約の書き出し<br>
                        各店の売上・仕入データ入力<br>
                        タイムカード管理<br>
                        必要に応じてデータ修正
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">11:00</div>
                    <div class="schedule-content"><p>
                        花キューピットで配達依頼<br>
                        資材発注
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">12:00</div>
                    <div class="schedule-content"><p>
                        昼食
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">15:00</div>
                    <div class="schedule-content"><p>
                    葬儀用受注の伝票処理<br>
葬祭部と連携し基数確認<br>
各書類の整理<br>
納品書のチェック
                    </p></div>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">18:00</div>
                    <div class="schedule-content">入金確認と処理<br>
花束やアレンジのメッセージカード作成<br>
翌日の配達先 地図確認<br>
（※この間、全ての時間帯で電話応対、注文受注、メールチェック）
退勤</div>
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
                    後方支援というか、裏側で誰かをサポートする、事務職ならではの働きができた時です。
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
