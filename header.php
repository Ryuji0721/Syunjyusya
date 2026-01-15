<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.svg">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.svg">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>

<div class="sp-container">

    <!-- Header -->
    <header class="site-header">
        <div class="header-inner">
            <div class="logo-area">
                <a href="<?php echo home_url('/'); ?>" class="header-logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.svg" alt="SHUNJYUSHA" class="header-logo-img">
                </a>
            </div>
            
            <button class="menu-button" id="menuToggle">
                <span class="menu-line"></span>
                <span class="menu-line"></span>
                <span class="menu-line"></span>
                <span class="menu-label">MENU</span>
            </button>
        </div>

        <!-- Menu Overlay -->
        <div class="sp-menu-overlay" id="menuOverlay">
            <button class="menu-close-btn" id="menuClose">
                <span class="close-bar"></span>
                <span class="close-bar"></span>
                <span class="menu-label">MENU</span>
            </button>
            
            <nav class="sp-menu-nav">
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
                    <li><a href="<?php echo home_url('/'); ?>#service">事業案内</a></li>
                    <li><a href="<?php echo home_url('/company'); ?>">企業情報</a></li>
                    <li><a href="<?php echo home_url('/store'); ?>">店舗情報</a></li>
                    <li><a href="<?php echo home_url('/flower'); ?>">お花について</a></li>
                    <li><a href="<?php echo home_url('/funeral'); ?>">葬祭部について</a></li>
                    <li><a href="<?php echo home_url('/recruit'); ?>">求人情報</a></li>
                    <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
                    <li><a href="#" target="_blank">オンラインショップ bloemen ➚</a></li>
                    <li><a href="#" target="_blank">花キューピット ➚</a></li>
                </ul>
            </nav>

            <div class="sp-menu-sns">
                <div class="menu-sns-item instagram-box">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram_official.png" alt="Instagram" class="menu-sns-icon"></a>
                    <div class="sns-note">
                        <p class="sns-name">Instagram</p>
                        <p class="sns-desc">近日DMにて注文受付開始</p>
                    </div>
                </div>
                <div class="menu-sns-item facebook-item">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook_official.png" alt="Facebook" class="menu-sns-icon"></a>
                </div>
            </div>
        </div>
    </header>

    <!-- Global PC Layout Wrapper -->
    <div class="global-pc-wrapper">
        
        <!-- Left Column: Logo (Appears on PC) -->
        <div class="global-pc-left">
            <div class="global-sticky-item logo-area">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.svg" alt="SHUNJUSHA" class="global-side-logo">
            </div>
        </div>

        <!-- Center Column: Main Content -->
        <div class="global-pc-center">
