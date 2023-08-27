<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a href="#" class="header__link"><img src="<?php echo esc_url(get_theme_file_uri("./images/common/logo.png")); ?>" alt="ExciteCode" /></a>
        </h1>
        <nav class="header__nav u-desktop">
          <ul class="header__items">
            <li class="header__item">
              <a href="#">top</a>
            </li>
            <li class="header__item">
              <a href="#">about</a>
            </li>
            <li class="header__item">
              <a href="#">service</a>
            </li>
            <li class="header__item">
              <a href="#">works</a>
            </li>
            <li class="header__item">
              <a href="#">news</a>
            </li>
            <li class="header__item header__item--reverse">
              <a href="#">
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
            <img src="./assets/images/common/reverse-logo.png" alt="ExciteCode">
          </div>
          <div class="header__drawer-inner js-drawer__inner">
            <ul class="header__drawer-items">
              <li class="header__drawer-item">
                <a href="#">top</a>
              </li>
              <li class="header__drawer-item">
                <a href="#">about</a>
              </li>
              <li class="header__drawer-item">
                <a href="#">service</a>
              </li>
              <li class="header__drawer-item">
                <a href="#">works</a>
              </li>
              <li class="header__drawer-item">
                <a href="#">news</a>
              </li>
              <li class="header__drawer-item">
                <a href="#">contact</a>
              </li>
              <li class="header__drawer-item">
                <a href="#">プライバシーポリシー</a>
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