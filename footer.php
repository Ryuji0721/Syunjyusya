    <footer class="site-footer">
        <div class="footer-inner">
            
            <div class="footer-top-area">
                <!-- Logo & Main Info -->
                <div class="footer-brand">
                    <div class="footer-logo-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.svg" alt="SHUNJUSHA" class="footer-logo-img">
                    </div>
                    <div class="footer-company-info">
                        <p class="company-name">株式会社 春秋舎</p>
                        <p class="company-address">〒317-0071<br>茨城県日立市鹿島町1-12-6</p>
                        <p class="company-tel">TEL : 0294-21-1414</p>
                    </div>
                </div>

                <!-- Sitemap Links -->
                <div class="footer-sitemap-grid">
                    <!-- Col 1 -->
                    <div class="sitemap-col">
                        <h4 class="sitemap-title">TOP</h4>
                        <ul class="sitemap-list">
                            <li><a href="<?php echo home_url('/'); ?>#omoi">想い</a></li>
                            <li><a href="<?php echo home_url('/'); ?>#service">事業案内</a></li>
                            <li><a href="<?php echo home_url('/'); ?>#delivery">配送・支払い情報</a></li>
                        </ul>
                    </div>
                    <!-- Col 2 -->
                    <div class="sitemap-col">
                        <h4 class="sitemap-title">企業情報</h4>
                        <ul class="sitemap-list">
                            <li><a href="<?php echo home_url('/company'); ?>">代表者挨拶</a></li>
                            <li><a href="<?php echo home_url('/company'); ?>">企業概要</a></li>
                            <li><a href="<?php echo home_url('/company'); ?>">各店舗</a></li>
                            <li><a href="<?php echo home_url('/company'); ?>">沿革</a></li>
                        </ul>
                    </div>
                    <!-- Col 3 -->
                    <div class="sitemap-col">
                        <h4 class="sitemap-title">店舗情報</h4>
                        <ul class="sitemap-list">
                            <li><a href="<?php echo home_url('/store'); ?>">各店舗概要</a></li>
                            <li><a href="<?php echo home_url('/store'); ?>">MAP</a></li>
                            <li><a href="https://shunjusha.hanatown.net/" target="_blank">花キューピット<span class="link_img"></span></a></li>
                            <li><a href="https://www.instagram.com/shunjusha/" target="_blank"  rel="noopener noreferrer">公式Instagram<span class="link_img"></span></a></li>
                            <li><a href="https://bloemen87.thebase.in/" target="_blank">オンラインショップ<br>bloemen<span class="link_img"></span></a></li>
                        </ul>
                    </div>
                    <!-- Col 4 -->
                    <div class="sitemap-col">
                        <h4 class="sitemap-title">お花について</h4>
                        <ul class="sitemap-list">
                            <li><a href="<?php echo home_url('/flower'); ?>">カテゴリで選ぶ</a></li>
                            <li><a href="<?php echo home_url('/flower'); ?>">ご用途で選ぶ</a></li>
                        </ul>
                    </div>
                    <!-- Col 5 -->
                    <div class="sitemap-col">
                        <h4 class="sitemap-title">葬祭部について</h4>
                        <ul class="sitemap-list">
                            <li><a href="<?php echo home_url('/funeral'); ?>">ご依頼の流れ</a></li>
                            <li><a href="<?php echo home_url('/funeral'); ?>">実例写真</a></li>
                            <li><a href="<?php echo home_url('/funeral'); ?>">お取引葬儀社様一覧</a></li>
                        </ul>
                    </div>
                    <!-- Col 6 -->
                    <div class="sitemap-col">
                        <h4 class="sitemap-title">求人情報</h4>
                        <ul class="sitemap-list">
                            <li><a href="<?php echo home_url('/recruit'); ?>">メッセージ</a></li>
                            <li><a href="<?php echo home_url('/recruit'); ?>">社員インタビュー</a></li>
                            <li><a href="<?php echo home_url('/recruit'); ?>">募集要項</a></li>
                            <li><a href="<?php echo home_url('/recruit'); ?>">選考の流れ</a></li>
                            <li><a href="https://job-gear.net/shunjusha/" target="_blank">採用サイト ➚</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-contact-area">
                <h4 class="sitemap-title contact-title">お問い合わせ</h4>
                
                <div class="footer-sns-section">
                    <!-- Instagram Box -->
                    <div class="footer-insta-box">
                        <div class="insta-icon-circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footerinst.svg" alt="Instagram">
                        </div>
                        <a href="https://www.instagram.com/shunjusha/" target="_blank"  rel="noopener noreferrer">
                        <div class="sns-note">
                            <p class="sns-name">Instagram</p>
                            <p class="sns-desc">近日DMにて注文受付開始</p>
                        </div>
                    </a>
                    </div>
                    
                    <!-- Facebook Icon -->
                    <a href="https://www.facebook.com/shunjusha/?locale=ja_JP"  target="_blank"  rel="noopener noreferrer" class="footer-facebook-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footerfacebook.svg" alt="Facebook">
                    </a>
                </div>

                <div class="footer-legal-links">
                    <a href="<?php echo home_url('/legal'); ?>">特定商取引に基づく記載</a>
                    <span class="sep">|</span>
                    <a href="<?php echo home_url('/privacy'); ?>">プライバシーポリシー</a>
                </div>

                <p class="copyright">Copyright © 春秋舎</p>
            </div>
        </div>
    </footer>

    </div><!-- /global-pc-center -->

    <!-- Right Column: Decoration (Vine & Flowers) -->
    <div class="global-pc-right">
        <div class="vine-decoration-area">
            <div class="vine-line"></div>
            <?php 
            // Array of flower photos to display along the vine
            $flower_images = array(
                'Anteak.jpg', 'Doraiflower.jpg', 'Ha-barium.jpg', 'Hanataba.jpg', 
                'flowerArenji.jpg', 'iwaibana.jpg', 'エルフラワー.jpg', 'フラワーエール.jpg'
            );
            
            // Loop many times to ensure it covers long pages
            for ($i = 0; $i < 20; $i++): 
                $img = $flower_images[$i % count($flower_images)];
                $side_class = ($i % 2 == 0) ? 'vine-item-right' : 'vine-item-left';
            ?>
                <div class="vine-flower-item <?php echo $side_class; ?>">
                    <div class="vine-flower-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $img; ?>" alt="">
                    </div>
                    <div class="vine-leaf"></div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

</div><!-- /global-pc-wrapper -->

</div> <!-- Close .sp-container -->

<?php wp_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var menuToggle = document.getElementById('menuToggle');
    var menuClose = document.getElementById('menuClose');
    var menuOverlay = document.getElementById('menuOverlay');

    if(menuToggle && menuClose && menuOverlay) {
        menuToggle.addEventListener('click', function() {
            menuOverlay.classList.add('active');
        });
        menuClose.addEventListener('click', function() {
            menuOverlay.classList.remove('active');
        });
    }
});
</script>
</body>
</html>
