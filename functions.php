<?php
function syunjyusya_enqueue_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array(), null );

    // Enqueue main stylesheet (Cache-busting with timestamp)
    wp_enqueue_style( 'syunjyusya-style', get_stylesheet_uri(), array(), date('His') );
}
add_action( 'wp_enqueue_scripts', 'syunjyusya_enqueue_scripts' );
