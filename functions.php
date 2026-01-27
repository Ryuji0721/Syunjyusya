<?php
function syunjyusya_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array(), null );

    // Swiper CSS
    wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0' );

    // テーマのメインCSS
    wp_enqueue_style( 'syunjyusya-style', get_stylesheet_uri(), array('swiper-style'), date('His') );

    // Swiper JS
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );

    // 自作初期化用JS
    wp_enqueue_script( 'custom-swiper', get_template_directory_uri() . '/assets/js/custom-swiper.js', array('swiper-js'), null, true );
}
add_action( 'wp_enqueue_scripts', 'syunjyusya_enqueue_scripts' );

