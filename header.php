<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
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
          <li class="header-nav-list__item<? if (is_home()): ?> header-nav-list__item--active<? endif; ?>">
            <a class="header-nav-list__link" href="/">Home</a>
          </li>
          <li class="header-nav-list__item<? if (is_page('News')): ?> header-nav-list__item--active<? endif; ?>">
            <a class="header-nav-list__link" href="/news">News</a>
          </li>
          <li class="header-nav-list__item<? if (is_page('About us')): ?> header-nav-list__item--active<? endif; ?>">
            <a class="header-nav-list__link" href="/about">About us</a>
          </li>
          <li class="header-nav-list__item<? if (is_page('Recruit')): ?> header-nav-list__item--active<? endif; ?>">
            <a class="header-nav-list__link" href="/recruit">Recruit</a>
          </li>
          <li class="header-nav-list__item<? if (is_page('Contact')): ?> header-nav-list__item--active<? endif; ?>">
            <a class="header-nav-list__link" href="/contact">Contact</a>
          </li>
        </ul>
      </nav>
    </header>
  </section>
