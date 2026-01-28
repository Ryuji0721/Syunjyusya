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
            <section class="company-profile-section" id="company-profile-section">
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
            <section class="greeting-section" id="greeting-section">
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

            <!-- Stores Section -->
            <section class="company-stores-section" id="company-stores-section">
                <h2 class="company-section-title">各店舗</h2>
                <div class="store-list-container">
                    <ul class="store-v-list">
                        <li>・ 本店</li>
                        <li>・ エルフラワー（スーパーかわねや南高野店内）</li>
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
            <section class="company-history-section" id="company-history-section">
                <h2 class="company-section-title">沿革</h2>
                <div class="history-timeline">
                    <?php
                    $history_data = get_post_meta( get_the_ID(), '_company_history', true );
                    if ( ! empty( $history_data ) ) :
                        foreach ( $history_data as $item ) :
                    ?>
                    <div class="history-item">
                        <div class="history-year"><p><?php echo esc_html( $item['year'] ); ?></p></div>
                        <div class="history-content">
                            <?php 
                            $main_lines = explode( "\n", $item['main'] );
                            foreach ( $main_lines as $line ) {
                                if ( ! empty( trim( $line ) ) ) {
                                    echo '<p class="history-main-text">' . esc_html( $line ) . '</p>';
                                }
                            }
                            ?>
                            <?php if ( ! empty( $item['sub'] ) ) : ?>
                            <div class="history-sub-text">
                                <?php 
                                $sub_lines = explode( "\n", $item['sub'] );
                                foreach ( $sub_lines as $line ) {
                                    if ( ! empty( trim( $line ) ) ) {
                                        echo '<p>' . esc_html( $line ) . '</p>';
                                    }
                                }
                                ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    else :
                    ?>
                    <!-- 沿革データが未設定の場合のデフォルト表示 -->
                    <p>沿革情報はまだ設定されていません。</p>
                    <?php endif; ?>
                </div>
            </section>
        </div>
    </main>

</main>

<?php get_footer(); ?>
