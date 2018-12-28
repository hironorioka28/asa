<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <meta name="format-detection" content="telephone=no">
  <title><?php if (! is_front_page()): wp_title('ー', true, 'right'); endif; ?><?php bloginfo('name'); ?></title>
  <?php if (! is_single()): ?>
    <meta property="og:title" content="<?php if (! is_front_page()): wp_title('ー', true, 'right'); endif; ?><?php bloginfo('name'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class('page'); ?>>
  <header>
    <h1>ここはヘッダー</h1>
  </header>
