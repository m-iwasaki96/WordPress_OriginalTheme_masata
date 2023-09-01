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
              国境を超え、メーカーを超え<br />
              「型にはまらない」あなただけの歓びを
            </h2>
            <p class="lower-message__text">
              弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br
                class="u-desktop"
              />これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
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
                「お客様とは一生涯のお付き合い」をモットーとし、同時に社員一人一人が責任と誇り、使命感を持ち日々の仕事にやりがいと喜びを感じることができる会社を目指します。そういう「社員満足」があってこそ、本当の「お客様に満足」が可能になり、そしてお客様のご満足がさらに社員の満足を高めてくれるからです。心の豊かさは楽とかゆとりとかいうより仕事の充実感に求めねばなりません。我々は現状に満足することなく挑戦し続けます。
              </p>
              <p class="philosophy__ceo-name">代表取締役&emsp;田中太郎</p>
            </div>
            <div class="philosophy__img">
              <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-ceoImg-sp.jpg")); ?>" media="(max-width: 768px)" />
                <img src="<?php echo esc_url(get_theme_file_uri("/images/common/aboutPage-ceoImg-pc.jpg")); ?>" alt="代表取締役が腕を組んで微笑んでいる様子" />
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
              <dd class="company__content">株式会社Excitecode</dd>
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
                <p class="company__detail">自動車販売（新車、中古車）古物No.第00000000号</p>
                <p class="company__detail">自動車整備（国産車、輸入車）<br class="u-mobile" />陸運局認証工場&emsp;認証No.0-0000</p>
                <p class="company__detail">陸運局認証工場&emsp;認証No.0-0000</p>
                <p class="company__detail">保険代理店<br class="u-mobile" />（ABC損害保険株式会社、DFG損害保険株式会社）</p>
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