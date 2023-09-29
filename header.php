<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if (is_404()) : ?>
      <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("")); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a href="<?php echo esc_url(home_url("/")) ?>" class="header__link"><img src="<?php echo esc_url(get_theme_file_uri("./images/common/logo.png")); ?>" alt="ExciteTravel" /></a>
        </h1>
        <nav class="header__nav u-desktop">
          <ul class="header__items">
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/")) ?>">top</a>
            </li>
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/about")) ?>">about</a>
            </li>
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/service")) ?>">service</a>
            </li>
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/works")) ?>">works</a>
            </li>
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/news")) ?>">news</a>
            </li>
            <li class="header__item header__item--reverse">
              <a href="<?php echo esc_url(home_url("/contact")) ?>">
                <i class="header__contactIcon fa-regular fa-envelope"></i>contact
              </a>
            </li>
          </ul>
        </nav>

        <div class="header__hamburger js-hamburger u-mobile">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="header__drawer js-drawer">
          <div class="header__drawer-logo">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/common/reverse-logo.png")); ?>" alt="ExciteCode">
          </div>
          <div class="header__drawer-inner js-drawer__inner">
            <ul class="header__drawer-items">
              <li class="header__drawer-item">
                <a href="<?php echo esc_url(home_url("/")) ?>">top</a>
              </li>
              <li class="header__drawer-item">
                <a href="<?php echo esc_url(home_url("/about")) ?>">about</a>
              </li>
              <li class="header__drawer-item">
                <a href="<?php echo esc_url(home_url("/service")) ?>">service</a>
              </li>
              <li class="header__drawer-item">
                <a href="<?php echo esc_url(home_url("/works")) ?>">works</a>
              </li>
              <li class="header__drawer-item">
                <a href="<?php echo esc_url(home_url("/news")) ?>">news</a>
              </li>
              <li class="header__drawer-item">
                <a href="<?php echo esc_url(home_url("/contact")) ?>">contact</a>
              </li>
              <li class="header__drawer-item">
                <a href="<?php echo esc_url(home_url("/")) ?>">プライバシーポリシー</a>
              </li>
            </ul>
            <div class="header__drawer-icons">
              <i class="header__social-icon fa-brands fa-facebook"></i>
              <i class="header__social-icon fa-brands fa-twitter"></i>
              <i class="header__social-icon fa-brands fa-instagram"></i>
            </div>
          </div>
        </div>
        <div class="header__drawer-circle js-circle"></div>
      </div>
    </header>