<?php

function title_setup() {
  // タイトル
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'title_setup' );

function add_files() {
  // JavaScript 読み込み
  wp_enqueue_script( 'asa-script', get_template_directory_uri() . '/dist/main.js', [], '', false );
}
add_action( 'wp_enqueue_scripts', 'add_files' );

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

register_sidebar(array(
  'name' => 'Contact' ,
  'id' => 'contact_form' ,
  'before_widget' => '<div class="widget">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

//ウィジェットでショートコードを使えるようにする
add_filter('widget_text', 'do_shortcode');

// URLの自動補完リダイレクトを無効にする
function disable_redirect_canonical( $redirect_url ) {
  $pattern = '/\/paged\//';
  preg_match($pattern, $redirect_url, $matches);

  if( is_404() ) {
    return false;
  }
  return $redirect_url;
}
add_filter( 'redirect_canonical', 'disable_redirect_canonical' );
