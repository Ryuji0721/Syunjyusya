<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.svg">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.svg">
    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Kaisei+Decol&family=Kiwi+Maru&family=M+PLUS+Rounded+1c:wght@400;500&family=Noto+Sans+JP:wght@100..900&family=Yusei+Magic&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Dela+Gothic+One&family=Kaisei+Decol&family=Kiwi+Maru:wght@400;500&family=M+PLUS+Rounded+1c:wght@400;500;700&family=Noto+Sans+JP:wght@100..900&family=Yusei+Magic&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="sp-container">

    <!-- Header -->
    <header class="site-header">
        <div class="header-inner">
            <div class="logo-area">
                <a href="<?php echo home_url('/'); ?>" class="header-logo-link">
                    <picture>
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.webp">
                        <source type="image/png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.png"
                             alt="SHUNJUSHA"
                             decoding="async"
                             class="header-logo-img">
                    </picture>
                </a>
            </div>

            <button class="menu-button" id="menuToggle">
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
                    <li><a href="<?php echo home_url('/'); ?>#service-section">事業案内</a></li>
                    <li><a href="<?php echo home_url('/company'); ?>">企業情報</a></li>
                    <li><a href="<?php echo home_url('/store'); ?>">店舗情報</a></li>
                    <li><a href="<?php echo home_url('/flower'); ?>">お花について</a></li>
                    <li><a href="<?php echo home_url('/funeral'); ?>">葬祭部について</a></li>
                    <li><a href="<?php echo home_url('/recruit'); ?>">求人情報</a></li>
                    <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
                    <li><a href="https://bloemen87.thebase.in/" target="_blank" rel="noopener noreferrer">オンラインショップ bloemen<span class="link_img"></span></a></li>
                    <li><a href="https://shunjusha.hanatown.net/" target="_blank" rel="noopener noreferrer">花キューピット<span class="link_img"></span></a></li>
                </ul>
            </nav>

            <div class="sp-menu-sns">
                <div class="menu-sns-item instagram-box">
                    <a href="https://www.instagram.com/shunjusha/" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="Instagram" class="menu-sns-icon">
                        <div class="sns-note">
                            <p class="sns-name">Instagram</p>
                            <p class="sns-desc">近日DMにて注文受付開始</p>
                        </div>
                    </a>
                </div>
                <div class="menu-sns-item facebook-item">
                    <a href="https://www.facebook.com/shunjusha/?locale=ja_JP" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Facebook_Logo.svg" alt="Facebook" class="menu-sns-icon">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Global PC Layout Wrapper -->
    <div class="global-pc-wrapper">

        <!-- Left Column: Logo (Appears on PC) -->
        <div class="global-pc-left">
            <div class="pc-side-menu global-sticky-item">
                <a href="<?php echo home_url('/'); ?>">
                    <picture>
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.webp">
                        <source type="image/png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.png"
                             alt="SHUNJUSHA"
                             decoding="async"
                             class="pc-side-logo">
                    </picture>
                </a>

                <?php
                $is_top_current = is_front_page();

                $is_company_current =
                    is_page('company') ||
                    is_page_template('page-company.php');

                $is_store_current =
                    is_page('store') ||
                    is_page_template('page-store.php');

                $is_funeral_current =
                    is_page('funeral') ||
                    is_page_template('page-funeral.php');

                $is_contact_current =
                    is_page('contact') ||
                    is_page_template('page-contact.php');

                $is_flower_current =
                    is_page('flower') ||
                    is_page_template('page-flower.php') ||
                    is_singular('flower_product') ||
                    is_post_type_archive('flower_product') ||
                    is_tax('flower_category') ||
                    is_tax('flower_usage');

                $tpl = '';
                if (is_page()) {
                    $tpl = get_page_template_slug(get_queried_object_id());
                }

                $is_interview_tpl = ($tpl !== '' && strpos($tpl, 'page-interview-') === 0);

                $is_recruit_current =
                    is_page('recruit') ||
                    is_page_template('page-recruit.php') ||
                    is_page_template('page-recruit-flower-full.php') ||
                    is_page_template('page-recruit-flower-part.php') ||
                    is_page_template('page-recruit-funeral-full.php') ||
                    is_page_template('page-recruit-funeral-part.php') ||
                    $is_interview_tpl;
                ?>

                <nav class="pc-side-nav">
                    <ul>
                        <li>
                            <a class="nav-top <?php echo $is_top_current ? 'is-current' : ''; ?>"
                               href="<?php echo home_url('/'); ?>">
                                TOP
                            </a>
                        </li>
                        <li>
                            <a class="nav-company <?php echo $is_company_current ? 'is-current' : ''; ?>"
                               href="<?php echo home_url('/company'); ?>">
                                企業情報
                            </a>
                        </li>
                        <li>
                            <a class="nav-store <?php echo $is_store_current ? 'is-current' : ''; ?>"
                               href="<?php echo home_url('/store'); ?>">
                                店舗情報
                            </a>
                        </li>
                        <li>
                            <a class="nav-flower <?php echo $is_flower_current ? 'is-current' : ''; ?>"
                               href="<?php echo home_url('/flower'); ?>">
                                お花について
                            </a>
                        </li>
                        <li>
                            <a class="nav-funeral <?php echo $is_funeral_current ? 'is-current' : ''; ?>"
                               href="<?php echo home_url('/funeral'); ?>">
                                葬祭部について
                            </a>
                        </li>
                        <li>
                            <a class="nav-recruit <?php echo $is_recruit_current ? 'is-current' : ''; ?>"
                               href="<?php echo home_url('/recruit'); ?>">
                                求人情報
                            </a>
                        </li>
                        <li>
                            <a class="nav-contact <?php echo $is_contact_current ? 'is-current' : ''; ?>"
                               href="<?php echo home_url('/contact'); ?>">
                                お問い合わせ
                            </a>
                        </li>
                        <li>
                            <a href="https://bloemen87.thebase.in/" target="_blank" rel="noopener noreferrer">
                                オンラインショップ<br>　　bloemen<span class="link_img"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://shunjusha.hanatown.net/" target="_blank" rel="noopener noreferrer">
                                花キューピット<span class="link_img"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Center Column: Main Content -->
        <div class="global-pc-center">