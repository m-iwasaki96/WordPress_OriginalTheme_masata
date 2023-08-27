<?php get_header(); ?>
<main>
      <section class="mv">
        <div class="mv__inner">
          <div class="mv__container">
            <div class="mv__js-swiper swiper">
              <div class="mv__swiper-wrapper swiper-wrapper">
                <div class="swiper-slide">
                  <picture class="mv__img">
                    <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/mv_sp01.jpg")); ?>" media="(max-width: 768px)" />
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/common/mv01.jpg")); ?>" alt="サングラスをかけた4人の女性が夕日の中のドライブを楽しんでいる様子" />
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture class="mv__img">
                    <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/mv_sp02.jpg")); ?>" media="(max-width: 768px)" />
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/common/mv02.jpg")); ?>" alt="サングラスをかけた長髪の男性が運転しているところを助手席から映した様子" />
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture class="mv__img">
                    <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/mv_sp03.jpg")); ?>" media="(max-width: 768px)" />
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/common/mv03.jpg")); ?>" alt="夕日が刺す中、男女がオープンカーで走るのを後ろから映した様子" />
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture class="mv__img">
                    <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/mv_sp04.jpg")); ?>" media="(max-width: 768px)" />
                    <img src="<?php echo esc_url(get_theme_file_uri("./images/common/mv04.jpg")); ?>." alt="景色のよい道で赤いオープンカーを路肩に停めて車に腰を下ろしている様子" />
                  </picture>
                </div>
              </div>
            </div>
            <div class="mv__body">
              <h2 class="mv__title">あなたの<br>日常が目覚める</h2>
            </div>
          </div>
        </div>
      </section>

      <div class="flow-text topFlowText">
        <p class="flow-text__message">Good&nbsp;life&nbsp;for&nbsp;Good&nbsp;Car</p>
      </div>

      <section class="about topAbout">
        <div class="about__inner inner">
          <div class="about__img">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/common/about.jpg")); ?>" alt="雄大な自然の中に通る道に">
          </div>
          <div class="about__contents">
            <h3 class="about__title">about&nbsp;us</h3>
            <p class="about__text">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
            <div class="about__link">
              <a href="#">read&nbsp;more</a>
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
                <img src="<?php echo esc_url(get_theme_file_uri("./images/common/service01.jpg")); ?>" alt="白い車がディスプレイされている様子">
                <div class="card__title">
                  <p class="card__title-en">Service01</p>
                  <p class="card__title-ja">購入サポート</p>
                </div>
              </div>
              <div class="card__contents">
                <div class="card__text">国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。</div>
                <div class="card__btn">
                  <a href="#">read&nbsp;more</a>
                </div>
              </div>
            </div>
            <div class="service__card card">
              <div class="card__img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/common/service02.jpg")); ?>" alt="ボンネットを開けて整備している手元を写した画像">
                <div class="card__title">
                  <p class="card__title-en">Service02</p>
                  <p class="card__title-ja">修理・整備</p>
                </div>
              </div>
              <div class="card__contents">
                <div class="card__text">高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。</div>
                <div class="card__btn">
                  <a href="#">read&nbsp;more</a>
                </div>
              </div>
            </div>
            <div class="service__card card">
              <div class="card__img">
                <img src="<?php echo esc_url(get_theme_file_uri("./images/common/service03.jpg")); ?>" alt="チェックリストを見ながら車を点検している様子">
                <div class="card__title">
                  <p class="card__title-en">Service03</p>
                  <p class="card__title-ja">車検・点検</p>
                </div>
              </div>
              <div class="card__contents">
                <div class="card__text">輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいなら弊社へご相談ください。</div>
                <div class="card__btn">
                  <a href="#">read&nbsp;more</a>
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
                <a href="#" class="works__item">
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
                              echo '<span class="works_label">' . esc_html( $taxonomy_term->name ) . '</span>';
                          }
                      }
                    ?>
                    <p class="works__item-title"><?php the_title(); ?></p>
                    <?php echo '<p class="works__text u-desktop">' . get_the_excerpt() . '</p>'; ?>
                    <time class="works__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                  </div>
                </a>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <div class="works__link">
                <a href="#">read&nbsp;more</a>
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
                      <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            foreach( $categories as $category ) {
                                echo '<span class="list__label list__label--reverse">' . esc_html( $category->name ) . '</span>';
                            }
                        }
                      ?>
                    </div>
                    <p class="list___text"><?php the_title(); ?></p>
                  </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <div class="news__link">
                  <a href="#">read&nbsp;more</a>
                </div>
              </div>
            <?php else : ?>
              <p>記事が投稿されていません。</p>
            <?php endif; ?>
          </div>
        </div>
      </section>

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
                <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri("./images/common/contact_sp.jpg")); ?>" />
                <img src="<?php echo esc_url(get_theme_file_uri("./images/common/contact_pc.jpg")); ?>" alt="展示されている車を写した様子" />
              </picture>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>