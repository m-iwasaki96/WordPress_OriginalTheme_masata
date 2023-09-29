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

      <div class="thanks">
        <div class="thanks__inner inner">
          <div class="thanks__heading">
            <p class="thannks__mesasge-en">THANK&nbsp;YOU&nbsp;FOR&nbsp;CONTACTING&nbsp;US.</p>
            <p class="thannks__mesasge-ja">お問い合わせありがとうございます。</p>
          </div>
          <p class="thanks__body">
            近日中に折り返しご連絡いたします。<br class="u-mobile">今しばらくお待ちくださいますよう、よろしくお願い申し上げます。<br class="u-mobile">万が一、ご回答メールが届かない場合は、送信トラブル等の可能性もありますので、大変お手数ではございますが、もう一度フォームよりお問い合わせいただくか、お電話にてお問い合わせをお願いいたします。<br>今後ともご愛顧賜りますようよろしくお願い申し上げます。
          </p>
          <div class="thanks__btn">
            <a href="<?php echo esc_url(home_url("/")) ?>">TOPへ戻る</a>
          </div>
        </div>
      </div>

      <div class="contact contactForm-contact">
        <div class="contact__inner">
          <div class="contact__wrapper">
            <div class="contact__contents">
              <p class="contact__text">国内・海外旅行や留学のご相談など<br />お気軽にお問い合わせください。</p>
              <div class="contact__btn">
                <a href="#">
                  <i class="contact__emailIcon fa-regular fa-envelope"></i>お問い合わせ
                </a>
              </div>
              <div class="contact__btn">
                <a href="#">
                  <i class="contact__telIcon fa-solid fa-phone"></i>0000-000-000
                </a>
              </div>
              <p class="contact__reception">受付時間 : 火曜日を除く 10：00〜18：00</p>
            </div>
            <div class="contact__img">
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri("./images/common/contact_sp.jpg")); ?>" />
              <img src="<?php echo esc_url(get_theme_file_uri("./images/common/contact_pc.jpg")); ?>" alt="晴天のひまわり畑に佇む女性の様子" />
            </picture>
            </div>
          </div>
        </div>
      </div>

    </main>
<?php get_footer(); ?>