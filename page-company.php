<?php
/*
Template Name: Company Page
*/
get_header(); ?>
    <main class="company-page-container">
        <!-- Vertical Red Line Decoration -->
        <div class="company-content-inner">
            <div class="page-header-simple">
                <p class="page-subtitle-en">Company</p>
                <h1 class="page-title-ja">企業情報</h1>
            </div>

            <!-- Company Leading Area -->
            <section class="company-leading">
                <div class="company-big-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.svg" alt="SHUNJUSHA Logo">
                </div>
                <div class="company-tagline">
                    <p class="tagline-text">日々の暮らしに、花の潤いを。</p>
                </div>
                <div class="company-intro-para">
                    <p>
                        茨城県日立市を本店に10店舗の花屋を展開しております。<br>
                        また、会社様向けに生花祭壇の造形も行っております。
                    </p>
                </div>
            </section>

            <!-- Company Profile Section -->
            <section class="company-profile-section">
                <h2 class="company-section-title">会社概要</h2>
                <div class="profile-list-v">
                    <div class="profile-v-item">
                        <p class="profile-v-label">会社名</p>
                        <p class="profile-v-value">株式会社 春秋舎</p>
                    </div>
                    <div class="profile-v-item">
                        <p class="profile-v-label">代表者</p>
                        <div class="profile-v-value">
                            <p>代表取締役会長　　鏑木　賢剛</p>
                            <p>代表取締役社長　　鏑木　宏介</p>
                        </div>
                    </div>
                    <div class="profile-v-item">
                        <p class="profile-v-label">所在地</p>
                        <p class="profile-v-value">茨城県日立市鹿島町1-12-6（本店）</p>
                    </div>
                    <div class="profile-v-item">
                        <p class="profile-v-label">創業</p>
                        <p class="profile-v-value">昭和4年</p>
                    </div>
                    <div class="profile-v-item">
                        <p class="profile-v-label">会社設立</p>
                        <p class="profile-v-value">昭和62年8月1日</p>
                    </div>
                    <div class="profile-v-item">
                        <p class="profile-v-label">資本金</p>
                        <p class="profile-v-value">1,000万円</p>
                    </div>
                    <div class="profile-v-item">
                        <p class="profile-v-label">業種名</p>
                        <p class="profile-v-value">生花及び造花の販売</p>
                    </div>
                    <div class="profile-v-item">
                        <p class="profile-v-label">社員数</p>
                        <p class="profile-v-value">45人</p>
                    </div>
                    <div class="profile-v-item">
                        <p class="profile-v-label">グループ会社</p>
                        <p class="profile-v-value">有限会社　ユー花</p>
                    </div>
                    <div class="profile-v-item">
                        <p class="profile-v-label">連絡先</p>
                        <div class="profile-v-value">
                            <div class="contact-block">
                                <p class="contact-place">本店</p>
                                <p class="contact-tel">TEL：0294-21-1414</p>
                                <p class="contact-fax">FAX：0294-21-1463</p>
                            </div>
                            <div class="contact-block">
                                <p class="contact-place">葬祭部</p>
                                <p class="contact-tel">TEL：0294-21-1470</p>
                                <p class="contact-fax">FAX：0294-21-1180</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Greeting Section -->
            <section class="greeting-section">
                <h2 class="company-section-title">代表者挨拶</h2>
                <div class="greeting-content">
                    <div class="greeting-text">
                        <p>
                            私たちは、冠婚葬祭をはじめ、お客様のあらゆるイベントに取り組み、四季折々の花を通して、お客様に感動と喜びと安らぎを提供し、お客様と社員さんの幸せを実現し、社会に貢献する企業になります。
                        </p>
                    </div>
                    <div class="greeting-image-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Syatyou.png" alt="鏑木 宏介" class="greeting-img">
                        <p class="greeting-signature">
                            代表取締役社長　　鏑木　宏介
                        </p>
                    </div>
                </div>
            </section>

            <!-- Image Video Section -->
            <section class="image-video-section">
                <h2 class="company-section-title">イメージビデオ</h2>
                <div class="video-container">
                    <div class="video-placeholder">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top1.png" alt="Video Thumbnail" class="video-thumb">
                        <div class="video-play-btn">
                            <span class="play-icon"></span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Stores Section -->
            <section class="company-stores-section">
                <h2 class="company-section-title">各店舗</h2>
                <div class="store-list-container">
                    <ul class="store-v-list">
                        <li>・ 本店</li>
                        <li>・ エルブラワー（スーパーかわねや南高野店内）</li>
                        <li>・ フラワーエル（ヒタチエ1F(旧イトーヨーカ堂)）</li>
                        <li>・ フローラ滑川店（スーパーマルト滑川店内）</li>
                        <li>・ フローラ那珂店（スーパーマルト那珂店内）</li>
                        <li>・ フローラ諏訪店（スーパーマルト諏訪店内）</li>
                        <li>・ フローラ塙山店（スーパーマルト塙山店内）</li>
                        <li>・ フローラ平沢店（スーパーマルト平沢店内）</li>
                        <li>・ フローラ森山店（スーパーマルト森山店内）</li>
                    </ul>
                    <div class="store-btn-area">
                        <a href="<?php echo home_url('/store'); ?>" class="pill-btn">店舗情報 ➔</a>
                    </div>
                </div>
            </section>

            <!-- History Section -->
            <section class="company-history-section">
                <h2 class="company-section-title">沿革</h2>
                <div class="history-timeline">
                    <div class="history-item">
                        <div class="history-year">1929年</div>
                        <div class="history-content">
                            <p class="history-main-text">春秋舎 日立市鹿島町に創業</p>
                            <div class="history-sub-text">
                                <p>［創業者：柴沼 安寿</p>
                                <p>　二代目：柴沼 由</p>
                                <p>　三代目：柴沼 清］</p>
                            </div>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">1984年</div>
                        <div class="history-content">
                            <p class="history-main-text">（株）富士祭典</p>
                            <p class="history-main-text">「総合結婚式場 日立サンシャイン常陽」にウェディング部門として参入</p>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">1985年</div>
                        <div class="history-content">
                            <p class="history-main-text">伊勢甚日立店　テナント参入</p>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">1987年</div>
                        <div class="history-content">
                            <p class="history-main-text">株式会社 春秋舎 設立</p>
                            <div class="history-sub-text">
                                <p>［四代目：代表取締役社長</p>
                                <p>　鏑木賢剛 就任］</p>
                            </div>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">1991年</div>
                        <div class="history-content">
                            <p class="history-main-text">イトーヨーカドー日立店</p>
                            <p class="history-main-text">（現日立ＳＣ店） テナント参入</p>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">1992年</div>
                        <div class="history-content">
                            <p class="history-main-text">ホテルサンガーデン日立</p>
                            <p class="history-main-text">（現在「ホテルテラスザスクエア日立」） ウェディング部門参入</p>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">1995年</div>
                        <div class="history-content">
                            <p class="history-main-text">株式会社かわねや 南高野店</p>
                            <p class="history-main-text">テナントオープン</p>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">1998年</div>
                        <div class="history-content">
                            <p class="history-main-text">株式会社かわねや 南高野店</p>
                            <p class="history-main-text">テナントオープン</p>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">2000年</div>
                        <div class="history-content">
                            <p class="history-main-text">株式会社マルト 東金沢店 参入</p>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">2003年</div>
                        <div class="history-content">
                            <p class="history-main-text">（株）富士祭典の生花部として、</p>
                            <p class="history-main-text">有限会社ユー花 を設立</p>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">2007年</div>
                        <div class="history-content">
                            <p class="history-main-text">ショッピングセンターマルト滑川店</p>
                            <p class="history-main-text">テナントオープン</p>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">2008年</div>
                        <div class="history-content">
                            <p class="history-main-text">ショッピングセンターマルト森山店</p>
                            <p class="history-main-text">テナントオープン</p>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">2009年</div>
                        <div class="history-content">
                            <p class="history-main-text">ショッピングセンターマルト那珂店</p>
                            <p class="history-main-text">テナントオープン</p>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">2009年</div>
                        <div class="history-content">
                            <p class="history-main-text">ショッピングセンターマルト平沢店</p>
                            <p class="history-main-text">テナントオープン</p>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">2014年</div>
                        <div class="history-content">
                            <p class="history-main-text">ショッピングセンターマルト元吉田店</p>
                            <p class="history-main-text">テナントオープン（現退去）</p>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="history-year">2025年</div>
                        <div class="history-content">
                            <p class="history-main-text">ショッピングセンターマルト内</p>
                            <p class="history-main-text">フローラ田尻店 退去</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

</main>

<?php get_footer(); ?>
