<?php get_header(); ?>
<main>
      <div class="lower-mv lowerLayout">
        <div class="lower-mv__inner">
          <div class="lower-mv__img">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/newsPage-fv-sp.jpg
              ")); ?>" media="(max-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri("./images/common/newsPage-fv-pc.jpg")); ?>" alt="ギャラリーに並ぶ車を横から映した様子" />
            </picture>
          </div>
          <div class="lower-mv__title">
            <h1 class="lower-mv__main-title">news</h1>
            <p class="lower-mv__sub-title">お知らせ</p>
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

      <div class="news-content">
        <section class="news newsPage-body">
          <div class="news__inner inner">
            <div class="news__wrapper list">
              <div class="list__aside">
                <div class="list__categories">
                  <ul class="list__category-items">
                    <li class="list__category-item is-active">すべてのお知らせ</li>
                    <li class="list__category-item">トピックス</li>
                    <li class="list__category-item">イベント・キャンペーン</li>
                    <li class="list__category-item">入庫車情報</li>
                  </ul>
                </div>
              </div>
              <?php if (have_posts()) : ?>
                <div class="list__menu-items">
                  <?php while (have_posts()) : the_post(); ?>
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
                  <?php
                    $args = array(
                        'mid_size' => 1,
                        'prev_text' => '<span class="pagination__arrow"></span>',
                        'next_text' => '<span class="pagination__arrow"></span>',
                    );
                    the_posts_pagination($args);
                  ?>
                </div>
              </div>
            <?php else : ?>
              <p>記事が投稿されていません。</p>
            <?php endif; ?>
          </div>
        </section>
      </div>

      <?php get_template_part('/template-parts/contact'); ?>
    </main>
<?php get_footer(); ?>