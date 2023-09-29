<?php get_header(); ?>
<main>
  <div class="lower-mv lowerLayout">
    <div class="lower-mv__inner">
      <div class="lower-mv__img">
        <picture>
          <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/contactPage-mv-sp.jpg")); ?> " media="(max-width: 768px)" />
          <img src="<?php echo esc_url(get_theme_file_uri("./images/common/contactPage-mv-pc.jpg")); ?>" alt="黄色の車を暗がりの中スタイリッシュに正面右側から撮影した画像" />
        </picture>
      </div>
      <div class="lower-mv__title">
        <h1 class="lower-mv__main-title">contact</h1>
        <p class="lower-mv__sub-title">お問い合わせ</p>
      </div>
    </div>
  </div>

  <?php if (function_exists('bcn_display')) { ?>
    <div class="commonBreadcrumb">
      <div class="commonBreadcrumb__body breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </div>
    </div>
  <?php } ?>

  <div class="contactForm">
    <div class="contactForm__inner inner">
      <p class="contactForm__text">
        弊社へのお問い合わせは<br>下記フォームより受け付けております。<br>担当者が確認後、折り返しご連絡させていただきます。
      </p>
    </div>
  </div>

  <?php echo do_shortcode('[contact-form-7 id="5a3364e" title="テストお問い合わせフォーム"]'); ?>

  <div class="contact contactForm-contact">
    <div class="contact__inner">
      <div class="contact__wrapper">
        <div class="contact__contents">
          <p class="contact__text">輸入車の購入や修理のご相談など<br>お気軽にお問い合わせください。</p>
          <div class="contact__btn">
            <a href="#">
              <span><i class="contact__emailIcon fa-regular fa-envelope"></i>お問い合わせ</span>
            </a>
          </div>
          <div class="contact__btn">
            <a href="#">
              <span><i class="contact__telIcon fa-solid fa-phone"></i>0000-000-000</span>
            </a>
          </div>
          <p class="contact__reception">受付時間 : 火曜日を除く 10：00〜18：00</p>
        </div>
        <div class="contact__img">
          <picture>
            <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri("./images/common/contact_sp.jpg")); ?>" />
            <img src="<?php echo esc_url(get_theme_file_uri("./images/common/contact_pc.jpg")); ?>" alt="展示されている車を写した様子" />
          </picture>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>