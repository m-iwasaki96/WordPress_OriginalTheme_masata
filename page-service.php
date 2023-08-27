<?php get_header(); ?>
<main>
      <div class="lower-mv servicePage-mv">
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
                <a href="#">購入サポート</a>
              </li>
              <li class="lower-message__link-item">
                <a href="#">修理・整備</a>
              </li>
              <li class="lower-message__link-item">
                <a href="#">車検・点検</a>
              </li>
            </ul>
          </div>
          <div class="lower-message__container">
            <h2 class="lower-message__main-message">
              お客様一人一人が求める<br>理想のカーライフに寄り添います
            </h2>
            <p class="lower-message__text">
              様々な輸入車・国産車のメンテナンスのご相談から点検・整備まで、親切かつスピーディな対応を心がけ、あらゆる疑問や不安にお答えします。最新鋭の自社集中工場には、四輪アライメントをはじめ最新コンピューターと各ブランドに精通した熟練のサービススタッフを配置、フロントでは車種ブランド別の専用電話回線をご用意しております。
            </p>
          </div>
        </div>
      </section>

      <div class="servicePage-content">
        <section class="service-menu">
          <div class="service-menu__inner inner">
            <div class="service-menu__top">
              <div class="service-menu__body">
                <p class="service-menu__number">01</p>
                <h3 class="service-menu__title">購入サポート</h3>
                <p class="service-menu__text">国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。</p>
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
                弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br class="u-desktop">これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
              </p>
            </div>
          </div>
        </section>

        <section class="service-menu">
          <div class="service-menu__inner inner">
            <div class="service-menu__top">
              <div class="service-menu__body">
                <p class="service-menu__number">02</p>
                <h3 class="service-menu__title">修理・整備</h3>
                <p class="service-menu__text">高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。</p>
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
                弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br class="u-desktop">これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いを整備工場でコーディネートいたします。
              </p>
            </div>
          </div>
        </section>

        <section class="service-menu">
          <div class="service-menu__inner inner">
            <div class="service-menu__top">
              <div class="service-menu__body">
                <p class="service-menu__number">03</p>
                <h3 class="service-menu__title">車検・点検</h3>
                <p class="service-menu__text">輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいならわたしたちへご相談ください。</p>
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
                弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br class="u-desktop">これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
              </p>
            </div>
          </div>
        </section>
      </div>

      <div class="contact">
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
                <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri("/images/common/contact_sp.jpg")); ?>" />
                <img src="<?php echo esc_url(get_theme_file_uri("/images/common/contact_pc.jpg")); ?>" alt="展示されている車を写した様子" />
              </picture>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>