<?php get_header(); ?>
<main>
      <?php get_template_part('/template-parts/fv'); ?>
      <?php if (function_exists('bcn_display')) { ?>
        <div class="commonBreadcrumb">
          <div class="commonBreadcrumb__body breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
            <?php bcn_display(); ?>
          </div>
        </div>
      <?php } ?>

      <section class="lower-message aboutPage-message">
        <div class="lower-message__inner inner">
          <div class="lower-message__links">
            <ul class="lower-message__link-items">
              <li class="lower-message__link-item">
                <a href="#philosophy">経営理念</a>
              </li>
              <li class="lower-message__link-item">
                <a href="#access">アクセス</a>
              </li>
              <li class="lower-message__link-item">
                <a href="#company">会社概要</a>
              </li>
            </ul>
          </div>
          <div class="lower-message__container">
            <h2 class="lower-message__main-message">
              お客様の夢を実現し、一生の思い出を創る。<br />
              一人ひとりに最高の体験とサービスを
            </h2>
            <p class="lower-message__text">
              弊社の経営理念は、お客様の夢を叶え、一生の思い出を共に創り上げることです。<br class="u-desktop"/>個別のニーズや希望に耳を傾け、カスタマイズされた旅行プランを提供し、最高の体験とサービスをお約束します。お客様の心からの満足と幸福を追求し、信頼を築き上げることが、私たちの存在意義です。皆様の旅行が素晴らしい思い出となり、人生の中で特別な瞬間として輝き続けることを願っております。
            </p>
          </div>
        </div>
      </section>

      <div id="philosophy" class="philosophy aboutPage-philosophy">
        <div class="philosophy__inner inner">
          <div class="philosophy__container">
            <div class="philosophy__text">
              <div class="philosophy__title">
                <p class="philosophy__sub-title lower-title__ja">経営理念</p>
                <h2 class="philosophy__main-title lower-title__en">philosophy</h2>
              </div>
              <p class="philosophy__message">
                私たちが提供する旅行は、ただの旅行ではありません。あなたの夢、希望、そして冒険への招待状です。私たちの存在意義は、お客様が夢を叶え、感動的な思い出を積み重ねるお手伝いをすることです。<br>旅行は新しい文化や人々との出会い、自己発見の場でもあります。私たちはその可能性を最大限に引き出すために、創造力と情熱を注ぎます。お客様の心に残る素晴らしい旅を提供し、その旅が人生における最も貴重な宝物の一部となることを約束します。
              </p>
              <p class="philosophy__ceo-name">代表取締役&emsp;田中太郎</p>
            </div>
            <div class="philosophy__img">
              <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-ceoImg-sp.jpg")); ?>" media="(max-width: 768px)" />
                <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-ceoImg-pc.jpg")); ?>" alt="代表取締役が笑顔を浮かべている様子" />
              </picture>
            </div>
          </div>
        </div>
      </div>

      <div id="access" class="access aboutPage-access">
        <div class="access__inner inner">
          <div class="access__title">
            <p class="access__sub-title lower-title__ja">アクセス</p>
            <h2 class="access__main-title lower-title__en">access</h2>
          </div>
          <p class="access__address">
            <!-- 〒220-0011<br class="u-mobile" />神奈川県横浜市西区高島２丁目 -->
            <?php the_field("custom-textarea"); ?>
          </p>
          <div class="access__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51992.7692380853!2d139.54584434863284!3d35.46598109999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185c0df6cfd2f1%3A0xbbbca6f36b5235f5!2z5qiq5rWc6aeF!5e0!3m2!1sja!2sjp!4v1691166482517!5m2!1sja!2sjp"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>

      <div id="company" class="company aboutPage-company">
        <div class="company__inner inner">
          <div class="company__title">
            <p class="company__sub-title lower-title__ja">会社概要</p>
            <h2 class="company__main-title lower-title__en">company&nbsp;profile</h2>
          </div>
          <div class="company__profile">
            <dl class="company__list">
              <dt class="company__label">会社名</dt>
              <dd class="company__content">株式会社ExciteTravel</dd>
            </dl>
            <dl class="company__list">
              <dt class="company__label">所在地</dt>
              <dd class="company__content"><?php the_field("custom-text"); ?></dd>
            </dl>
            <dl class="company__list">
              <dt class="company__label">設立</dt>
              <dd class="company__content">2015年12月10日</dd>
            </dl>
            <dl class="company__list">
              <dt class="company__label">代表取締役</dt>
              <dd class="company__content">田中&emsp;太郎</dd>
            </dl>
            <dl class="company__list">
              <dt class="company__label">事業内容</dt>
              <dd class="company__content">
                <p class="company__detail">旅行事業、留学事業、語学関連事業</p>
              </dd>
            </dl>
          </div>
        </div>
      </div>

      <div class="img-gallery aboutPage-img-gallary">
        <ul class="img-gallary__items">
          <li class="img-gallary__item">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-img01.jpg")); ?>" alt="女性が車の窓に手をかけて笑顔で2人の男性と話している様子">
          </li>
          <li class="img-gallary__item">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-img02.jpg")); ?>" alt="車のキーを持っている手の画像">
          </li>
          <li class="img-gallary__item">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-img03.jpg")); ?>" alt="車のボンネットを開けてメンテナンスをする手元を写した画像">
          </li>
          <li class="img-gallary__item">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-img04.jpg")); ?>" alt="赤い車のボディを器具を用いて磨き上げている手元を写した画像">
          </li>
          <li class="img-gallary__item">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-img05.jpg")); ?>" alt="男性が工具を持って車の下から整備作業をしている様子">
          </li>
          <li class="img-gallary__item">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-img06.jpg")); ?>" alt="赤い車のボディを器具を用いて磨き上げている手元を写した画像">
          </li>
        </ul>
        <ul class="img-gallary__items">
          <li class="img-gallary__item">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-img01.jpg")); ?>" alt="車のボンネットを開けてメンテナンスをする手元を写した画像">
          </li>
          <li class="img-gallary__item">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-img02.jpg")); ?>" alt="車のキーを持っている手の画像">
          </li>
          <li class="img-gallary__item">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-img03.jpg")); ?>" alt="女性が車の窓に手をかけて笑顔で2人の男性と話している様子">
          </li>
          <li class="img-gallary__item">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-img04.jpg")); ?>" alt="男性が車の脇にかがみ込んで資料を見ながら車の足回りをチェックしている様子">
          </li>
          <li class="img-gallary__item">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-img05.jpg")); ?>" alt="男性が工具を持って車の下から整備作業をしている様子">
          </li>
          <li class="img-gallary__item">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-img06.jpg")); ?>" alt="赤い車のボディを器具を用いて磨き上げている手元を写した画像">
          </li>
        </ul>
      </div>
      <?php get_template_part('/template-parts/contact'); ?>
    </main>
<?php get_footer(); ?>