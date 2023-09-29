<?php get_header(); ?>
  <main>
    <div class="lower-mv lowerLayout">
      <div class="lower-mv__inner">
        <div class="lower-mv__img">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/servicePage-mv-sp.jpg")); ?>" media="(max-width: 768px)" />
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/servicePage-mv-pc.jpg")); ?>" alt="ギャラリーに並ぶ車を横から映した様子" />
          </picture>
        </div>
        <div class="lower-mv__title">
          <h1 class="lower-mv__main-title">service</h1>
          <p class="lower-mv__sub-title">サービス紹介</p>
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

    <section class="lower-message servicePage-message">
      <div class="lower-message__inner inner">
        <div class="lower-message__links">
          <ul class="lower-message__link-items">
            <li class="lower-message__link-item">
              <a href="#support">国内・海外旅行</a>
            </li>
            <li class="lower-message__link-item">
              <a href="#maintenance">訪日旅行</a>
            </li>
            <li class="lower-message__link-item">
              <a href="#">海外留学</a>
            </li>
          </ul>
        </div>
        <div class="lower-message__container">
          <h2 class="lower-message__main-message">
          お客様一人ひとりに合わせた<br>あなただけの最高の体験を創り上げます。
          </h2>
          <p class="lower-message__text">
            お客様の夢と要望に合わせて、特別な旅行体験をデザインします。日本国内での穏やかな温泉旅館から、世界中のエキゾチックな目的地への冒険まで、幅広い選択肢を提供しています。訪日旅行者には、文化、食事、歴史など、日本の魅力を存分に楽しむためのプランを用意しております。また、海外留学を検討中の方には、信頼性の高いプログラムとサポートを提供し、異文化の素晴らしさを体験できるようお手伝いいたします。私たちはお客様の希望を最優先し、忘れられない旅行を実現するお手伝いをさせていただきます。
          </p>
        </div>
      </div>
    </section>

    <div class="servicePage-content">
      <section id="support" class="service-menu">
        <div class="service-menu__inner inner">
          <div class="service-menu__top">
            <div class="service-menu__body">
              <p class="service-menu__number">01</p>
              <h3 class="service-menu__title">国内・海外旅行</h3>
              <p class="service-menu__text">夢の休暇を実現。休息からアクティビティまで、あなたの希望に合わせて最高の旅行体験を提供します。</p>
            </div>
            <div class="service-menu__img">
              <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/servicePage-menu01-sp.jpg")); ?>" media="(max-width: 768px)" />
                <img src="<?php echo esc_url(get_theme_file_uri("/images/common/servicePage-menu01-pc.jpg")); ?>" alt="薄暗い中でライトを点けているベンツを正面から写した画像" />
              </picture>
            </div>
          </div>
          <div class="service-menu__bottom">
            <div class="service-menu__feature">
              <p class="service-menu__feature-en">features</p>
              <p class="service-menu__feature-ja">特徴</p>
            </div>
            <p class="service-menu__description">
              当社の国内・海外旅行は、あなたの夢の旅行をカスタマイズし、特別な体験を提供します。国内旅行では、美しい景色、歴史的な名所、そして地元の文化に触れるチャンスを提供します。海外旅行では、世界中の目的地への扉を開きます。私たちは、あなたの希望と予算に合わせて、最高の旅行プランを作成します。休暇、文化体験、リラックス、何でもお任せください。あなたの旅行の夢を現実にします。
            </p>
          </div>
        </div>
      </section>

      <section id="maintenance" class="service-menu">
        <div class="service-menu__inner inner">
          <div class="service-menu__top">
            <div class="service-menu__body">
              <p class="service-menu__number">02</p>
              <h3 class="service-menu__title">訪日旅行</h3>
              <p class="service-menu__text">日本滞在を特別なものに。文化体験、美食探求など、訪日旅行をカスタマイズして、心に残る思い出を創り出します。</p>
            </div>
            <div class="service-menu__img">
              <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/servicePage-menu02-sp.jpg")); ?>" media="(max-width: 768px)" />
                <img src="<?php echo esc_url(get_theme_file_uri("/images/common/servicePage-menu02-pc.jpg")); ?>" alt="ボンネットを開けて車の整備を行っている手元を写した画像" />
              </picture>
            </div>
          </div>
          <div class="service-menu__bottom">
            <div class="service-menu__feature">
              <p class="service-menu__feature-en">features</p>
              <p class="service-menu__feature-ja">特徴</p>
            </div>
            <p class="service-menu__description">
              訪日旅行サービスでは、日本の美しい風景、伝統文化、食事体験、アクティビティをカスタマイズし、日本での素晴らしい体験を提供します。富士山の登山、寺社仏閣巡り、和食のマスタークラス、温泉リトリートなど、あなたの希望に合わせてプランを立てます。日本での旅行を特別な思い出として心に残しましょう。
            </p>
          </div>
        </div>
      </section>

      <section id="inspection" class="service-menu">
        <div class="service-menu__inner inner">
          <div class="service-menu__top">
            <div class="service-menu__body">
              <p class="service-menu__number">03</p>
              <h3 class="service-menu__title">海外留学</h3>
              <p class="service-menu__text">個人の希望に応じて、最適なプログラムと目的地を見つけます。キャリアを広げる第一歩を踏み出しましょう。</p>
            </div>
            <div class="service-menu__img">
              <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/servicePage-menu03-sp.jpg")); ?>" media="(max-width: 768px)" />
                <img src="<?php echo esc_url(get_theme_file_uri("/images/common/servicePage-menu03-pc.jpg")); ?>" alt="チェックリスト片手に車の足回りを点検している様子" />
              </picture>
            </div>
          </div>
          <div class="service-menu__bottom">
            <div class="service-menu__feature">
              <p class="service-menu__feature-en">features</p>
              <p class="service-menu__feature-ja">特徴</p>
            </div>
            <p class="service-menu__description">
              海外での学びの機会を追求している方のために、私たちがサポートします。海外留学サービスでは、あなたの学術的な目標や個人的な希望に基づいて、最適なプログラムと目的地を見つけます。語学留学、大学院プログラム、文化交流、インターンシップ、ボランティア活動など、さまざまな選択肢があります。国際的なキャリアを築く一歩を踏み出すお手伝いをお任せください。
            </p>
          </div>
        </div>
      </section>
    </div>

    <div class="contact servicePage-contact">
      <div class="contact__inner">
        <div class="contact__wrapper">
          <div class="contact__contents">
            <p class="contact__text">国内・海外旅行や留学のご相談など<br>お気軽にお問い合わせください。</p>
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
              <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri("/images/common/contact_sp.jpg")); ?>" />
              <img src="<?php echo esc_url(get_theme_file_uri("/images/common/contact_pc.jpg")); ?>" alt="展示されている車を写した様子" />
            </picture>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>