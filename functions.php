<?php

function title_setup() {
  // タイトル
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'title_setup' );

function add_files() {
  // WordPress 本体の jquery.js を読み込まない
  wp_deregister_script('jquery');

  // JavaScript 読み込み
  wp_enqueue_script( 'asa-script', get_template_directory_uri() . '/dist/main.js', [], '', false );
}
add_action( 'wp_enqueue_scripts', 'add_files' );

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');
