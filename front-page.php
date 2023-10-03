<?php get_header(); ?>
  <main class="js-top js-listPage">
    <div class="loader">
      <div class="loader__line"></div>
      <div class="loader__line">
        <img src="<?php echo esc_url(get_theme_file_uri("./images/common/loader-logo.png")); ?>" alt="ExciteTravel">
      </div>
      <div class="loader__line"></div>
    </div>

    <section class="mv">
      <div class="mv__inner">
        <div class="mv__container">
          <div class="mv__js-swiper swiper">
            <div class="mv__swiper-wrapper swiper-wrapper">
              <div class="swiper-slide">
                <picture class="mv__img">
                  <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/mv_sp01.jpg")); ?>" media="(max-width: 768px)" />
                  <img src="<?php echo esc_url(get_theme_file_uri("./images/common/mv01.jpg")); ?>" alt="竹藪の中から美しい光が差し込んでいる様子" />
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="mv__img">
                  <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/mv_sp02.jpg")); ?>" media="(max-width: 768px)" />
                  <img src="<?php echo esc_url(get_theme_file_uri("./images/common/mv02.jpg")); ?>" alt="快晴の空と真っ青な海の写真" />
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="mv__img">
                  <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/mv_sp03.jpg")); ?>" media="(max-width: 768px)" />
                  <img src="<?php echo esc_url(get_theme_file_uri("./images/common/mv03.jpg")); ?>" alt="海辺に映える夜景の写真" />
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="mv__img">
                  <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/mv_sp04.jpg")); ?>" media="(max-width: 768px)" />
                  <img src="<?php echo esc_url(get_theme_file_uri("./images/common/mv04.jpg")); ?>." alt="真っ赤に紅葉した木々ときれいな渓流" />
                </picture>
              </div>
            </div>
          </div>
          <div class="mv__body">
            <h2 class="mv__title">一生に一度の<br>あなただけの旅を</h2>
          </div>
        </div>
      </div>
    </section>

    <div class="flow-text topFlowText">
      <p class="flow-text__message">We&nbsp;Create&nbsp;Experiences,&nbsp;Not&nbsp;Just&nbsp;Trips.</p>
    </div>

    <section class="about topAbout">
      <div class="about__inner inner">
        <div class="about__img js-image">
          <img src="<?php echo esc_url(get_theme_file_uri("./images/common/about.jpg")); ?>" alt="町屋の並ぶ路地を着物と和傘で手を取って歩くカップルの後ろ姿">
        </div>
        <div class="about__contents">
          <h3 class="about__title">about&nbsp;us</h3>
          <p class="about__text">弊社はオーダーメイドの旅行会社です。あらゆる変化やリクエストにスピーディーに、柔軟に対応し、お客様の夢の旅行を実現します。個別の要望に合わせた最高の体験を提供し、日本、そして世界中の魅力的な目的地をご案内します。豊富な経験とネットワークを活かし、一生の思い出に残る旅をお手伝いします。</p>
          <div class="about__link">
            <a href="<?php echo esc_url(home_url("/about")) ?>">read&nbsp;more</a>
          </div>
        </div>
      </div>
    </section>

    <section class="service topService">
      <div class="service__inner inner">
        <div class="service__header">
          <h3 class="service__title title">service</h3>
        </div>
        <div class="service__cards">
          <div class="service__card card">
            <div class="card__img">
              <img src="<?php echo esc_url(get_theme_file_uri("./images/common/service01.jpg")); ?>" alt="渋谷の街をを多くの人が行き交う様子">
              <div class="card__title">
                <p class="card__title-en">Service01</p>
                <p class="card__title-ja">国内・海外旅行</p>
              </div>
            </div>
            <div class="card__contents">
              <div class="card__text">カスタマイズされた国内外の旅行プランで、夢の休暇を実現。休息からアクティビティまで、あなたの希望に合わせて最高の旅行体験を提供します。</div>
              <div class="card__btn">
                <a href="<?php echo esc_url(home_url("/service")) ?>">read&nbsp;more</a>
              </div>
            </div>
          </div>
          <div class="service__card card">
            <div class="card__img">
              <img src="<?php echo esc_url(get_theme_file_uri("./images/common/service02.jpg")); ?>" alt="夕暮れどきに海辺に佇む鳥居とその周囲を観光する人々の様子">
              <div class="card__title">
                <p class="card__title-en">Service02</p>
                <p class="card__title-ja">訪日旅行</p>
              </div>
            </div>
            <div class="card__contents">
              <div class="card__text">海外からのお客様の日本滞在を特別なものに。富士山登山、文化体験、美食探求など、訪日旅行をカスタマイズして、素晴らしい思い出を創り出します。</div>
              <div class="card__btn">
                <a href="<?php echo esc_url(home_url("/service")) ?>">read&nbsp;more</a>
              </div>
            </div>
          </div>
          <div class="service__card card">
            <div class="card__img">
              <img src="<?php echo esc_url(get_theme_file_uri("./images/common/service03.jpg")); ?>" alt="イギリスの象徴的なビッグベン周辺の街並み">
              <div class="card__title">
                <p class="card__title-en">Service03</p>
                <p class="card__title-ja">海外留学</p>
              </div>
            </div>
            <div class="card__contents">
              <div class="card__text">国際的な学びの機会を提供。学術目標や個人の希望に応じて、最適な海外留学プログラムと目的地を見つけます。キャリアを広げる第一歩を踏み出しましょう。</div>
              <div class="card__btn">
                <a href="<?php echo esc_url(home_url("/service")) ?>">read&nbsp;more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="works topWorks">
      <div class="works__inner inner">
        <div class="works__header">
          <h3 class="works__title title">works</h3>
        </div>
        <?php
        $args = array(
          "post_type" => "works",
          "posts_per_page" => 3,
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <div class="works__container">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="works__item">
                <div class="works__img">
                <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('full'); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_theme_file_uri("./images/common/noimage.jpg")); ?>" alt="NoImage画像" />
                    <?php endif; ?>                  </div>
                <div class="works__contents">
                  <?php
                    $taxonomy_terms = get_the_terms($post->ID, 'genre');
                    if ( ! empty( $taxonomy_terms ) ) {
                        foreach( $taxonomy_terms as $taxonomy_term ) {
                            echo '<span class="works__label">' . esc_html( $taxonomy_term->name ) . '</span>';
                        }
                    }
                  ?>
                  <p class="works__item-title">
                    <span><?php the_title(); ?></span>
                  </p>
                  <?php echo '<p class="works__text u-desktop">' . get_the_excerpt() . '</p>'; ?>
                  <time class="works__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                </div>
              </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <div class="works__link">
              <a href="<?php echo esc_url(home_url("/works")) ?>">read&nbsp;more</a>
            </div>
          </div>
          <?php else : ?>
          <?php endif; ?>
      </div>
    </section>

    <section class="news topNews">
      <div class="news__inner inner">
        <div class="news__wrapper list">
          <div class="list__aside">
            <div class="news__header">
              <h3 class="news__title title">news</h3>
            </div>
            <div class="list__categories">
              <div class="list__category-items">
                <?php
                $current_category_id = get_queried_object_id();
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'order'   => 'ASC',
                ));

                // 通常投稿一覧ページへのURL
                $home_class = (is_home() || is_front_page()) ? 'is-active' : '';
                $home_link = sprintf(
                  //通常投稿一覧ページへのaタグに付与するクラスを指定できる
                  '<a class="list__category-item %s" href="%s" alt="%s">すべてのお知らせ</a>',
                  $home_class,
                  // 通常投稿一覧ページのスラッグを指定
                  esc_url(home_url('/news')),
                  esc_attr(__('View all posts', 'textdomain'))
                );
                echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

                // カテゴリーのリンク
                if ($categories) {
                  foreach ($categories as $category) {
                      // カレントクラスに付与するクラスを指定できる
                      $category_class = ($current_category_id === $category->term_id) ? 'is-active' : '';
                      $category_link = sprintf(
                          // 各カテゴリーに付与するクラスを指定できる
                          '<a class="list__category-item %s" href="%s" alt="%s">%s</a>',
                          $category_class,
                          esc_url(get_category_link($category->term_id)),
                          esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
                          esc_html($category->name)
                      );
                      echo sprintf(esc_html__('%s', 'textdomain'), $category_link);
                  }
                }
              ?>
              </div>
            </div>
          </div>
          <?php
            $args = array(
                "post_type" => "post",
                "posts_per_page" => 5
            );
            $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <div class="list__menu-items">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="list__menu-item">
                  <div class="list__meta">
                    <time class="list__item-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <div class="list__label-wrapper">
                      <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            foreach( $categories as $category ) {
                                echo '<span class="list__label">' . esc_html( $category->name ) . '</span>';
                            }
                        }
                      ?>
                    </div>
                  </div>
                  <p class="list___text">
                    <span><?php the_title(); ?></span>
                  </p>
                </a>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <div class="news__link">
                <a href="<?php echo esc_url(home_url("/news")) ?>">read&nbsp;more</a>
              </div>
            </div>
          <?php else : ?>
            <p>記事が投稿されていません。</p>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <?php get_template_part('/template-parts/contact'); ?>
  </main>
<?php get_footer(); ?>