<?php
// CSSファイルの読み込み設定
function enqueue_styles() {
  // Google Fontsの読み込みスクリプト
  // TODO: preconnectの方法調べる
  // <link rel="preconnect" href="https://fonts.googleapis.com">
  // <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Oswald:wght@700&display=swap',
  );
  // Yaku Han JPの読み込みスクリプト
  wp_enqueue_style(
    'yakuhanjp',
    'https://cdn.jsdelivr.net/npm/yakuhanjp@3.3.1/dist/css/yakuhanjp.min.css',
  );
  // テーマフォルダCSSの読み込みスクリプト
  wp_enqueue_style(
    'style',
    get_stylesheet_directory_uri() . '/css/style.css',
  );
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

// JSファイルの読み込み設定
function enqueue_scripts() {
  // fontawesomeの読み込みスクリプト
  wp_enqueue_script(
    'fontawesome',
    'https://use.fontawesome.com/releases/v5.3.1/js/all.js',
    array(),
    '5.3.1',
    true,
  );
  // テーマフォルダJSの読み込みスクリプト
  wp_enqueue_script(
    'script',
    get_stylesheet_directory_uri() . '/js/script.js',
    array(),
    '',
    true,
  );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

// TOPページ用ファイルの読み込み設定
function enqueue_files_top() {
  if (is_front_page()) {
    wp_enqueue_style(
      'style-top',
      get_stylesheet_directory_uri() . '/css/top.css',
    );
    wp_enqueue_script(
      'script-top',
      get_stylesheet_directory_uri() . '/js/top.js',
      array(),
      '',
      true,
    );
  }
}
add_action('wp_enqueue_scripts', 'enqueue_files_top');