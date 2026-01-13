<?php
function syunjyusya_enqueue_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array(), null );

    // Enqueue Swiper CSS
    wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0' );

    // Enqueue main stylesheet (Cache-busting with timestamp)
    wp_enqueue_style( 'syunjyusya-style', get_stylesheet_uri(), array('swiper-style'), date('His') );

    // Enqueue Swiper JS
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'syunjyusya_enqueue_scripts' );
