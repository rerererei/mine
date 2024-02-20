	
<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );

function init_session_start() {

    // セッションが開始されていなければここで開始
    if( session_status() !== PHP_SESSION_ACTIVE ) {

        session_start();
    }
}

add_action( 'template_redirect', 'init_session_start' );

// 対象ページのみreCAPTCHAを読み込む
add_action('wp_enqueue_scripts', function(){
  if(is_page('contact')) return;
    wp_deregister_script('google-recaptcha');
}, 100, 0);
