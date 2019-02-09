<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>
<body <?php body_class('page'); ?>>
  <section class="page__header">
    <header class="header">
      <h1 class="header__title">
        <a class="header__link" href="/">鈴木啓 / ASA</a>
      </h1>
      <nav class="header__nav">
        <ul class="header-nav-list">
          <li class="header-nav-list__item<?php if (is_category('works')): ?> header-nav-list__item--active<?php endif; ?>">
            <a class="header-nav-list__link" href="/works">Works</a>
          </li>
          <li class="header-nav-list__item<?php if (is_category('news')): ?> header-nav-list__item--active<?php endif; ?>">
            <a class="header-nav-list__link" href="/news">News</a>
          </li>
          <li class="header-nav-list__item<?php if (is_page('About us')): ?> header-nav-list__item--active<?php endif; ?>">
            <a class="header-nav-list__link" href="/about">About</a>
          </li>
          <li class="header-nav-list__item<?php if (is_page('Recruit')): ?> header-nav-list__item--active<?php endif; ?>">
            <a class="header-nav-list__link" href="/recruit">Recruit</a>
          </li>
          <li class="header-nav-list__item<?php if (is_page('Contact')): ?> header-nav-list__item--active<?php endif; ?>">
            <a class="header-nav-list__link" href="/contact">Contact</a>
          </li>
        </ul>
      </nav>
    </header>
  </section>
