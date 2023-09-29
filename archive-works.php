<?php get_header(); ?>
  <main class="js-listPage">
    <div class="lower-mv lowerLayout">
      <div class="lower-mv__inner">
        <div class="lower-mv__img">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/worksPage-mv-sp.jpg")); ?>
            " media="(max-width: 768px)" />
            <img src="<?php echo esc_url(get_theme_file_uri("./images/common/worksPage-mv-pc.jpg")); ?>" alt="黄色の車を暗がりの中スライリッシュに正面右側から撮影した画像" />
          </picture>
        </div>
        <div class="lower-mv__title">
          <h1 class="lower-mv__main-title">works</h1>
          <p class="lower-mv__sub-title">事例紹介</p>
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

    <div class="post worksPage-body">
      <div class="post__inner inner">
        <div class="post__wrapper list">
          <div class="list__aside">
            <div class="list__categories">
              <div class="list__category-items">
              <?php
              if (!empty (get_queried_object()->term_id)) {
                $current_term_id = get_queried_object()->term_id;
              } else {
                $current_term_id = "";
              }
              $terms = get_terms(array(
                  // 表示するタクソノミースラッグを記述
                  'taxonomy' => 'genre',
                  'orderby' => 'name',
                  'order'   => 'ASC',
                  // 表示するタームの数を指定
                  'number'  => 3
              ));

                // カスタム投稿一覧ページへのURL
                $home_class = (is_post_type_archive()) ? 'is-active' : '';
                $home_link = sprintf(
                    //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
                    '<a class="list__category-item %s" href="%s" alt="%s">すべての実績</a>',
                    $home_class,
                    // カスタム投稿一覧ページのスラッグを指定
                    esc_url(home_url('/works')),
                    esc_attr(__('View all posts', 'textdomain'))
                );
                echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

                // タームのリンク
                if (!empty ($terms)) {
                  foreach ($terms as $term) {
                      // カレントクラスに付与するクラスを指定できる
                      $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
                      $term_link = sprintf(
                          // 各タームに付与するクラスを指定できる
                          '<a class="list__category-item %s" href="%s" alt="%s">%s</a>',
                          $term_class,
                          esc_url(get_term_link($term->term_id)),
                          esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
                          esc_html($term->name)
                      );
                      echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
                  }
                }
                ?>
              </div>
            </div>
          </div>

          <?php
          $args = array(
            "post_type" => "works",
            "posts_per_page" => 3,
            'paged' => get_query_var('paged'),
          );
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <div class="list__menu-items">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="list__menu-item imageList-item">
                  <div class="imageList-item__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('full'); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_theme_file_uri("./images/common/noimage.jpg")); ?>" alt="NoImage画像" />
                    <?php endif; ?>
                  </div>
                  <div class="imageList-item__contents">
                    <div class="imageList-item__label-wrapper">
                      <?php
                        $taxonomy_terms = get_the_terms($post->ID, 'genre');
                        if ( ! empty( $taxonomy_terms ) ) {
                            foreach( $taxonomy_terms as $taxonomy_term ) {
                                echo '<span class="imageList-item__label">' . esc_html( $taxonomy_term->name ) . '</span>';
                            }
                        }
                      ?>
                    </div>
                    <p class="imageList-item__title"><?php the_title(); ?></p>
                    <time class="imageList-item__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                  </div>
                </a>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
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
      </div>
    </div>

    <?php get_template_part('/template-parts/contact'); ?>
  </main>
<?php get_footer(); ?>