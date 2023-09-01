<?php get_header(); ?>
<main>
  <?php if (function_exists('bcn_display')) { ?>
    <div class="commonBreadcrumb lowerArticle-head">
      <div class="commonBreadcrumb__body breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </div>
    </div>
  <?php } ?>
  <div class="newsArticle newsArticleLayout">
    <div class="newsArticle__inner inner">
      <div class="newsArticle__wrapper">
        <article class="newsArticle__container">
          <div class="newsArticle__category">
            <?php
              $categories = get_the_category();
              if ( ! empty( $categories ) ) {
                  foreach( $categories as $category ) {
                      echo '<span class="newsArticle__label">' . esc_html( $category->name ) . '</span>';
                  }
              }
            ?>
          </div>
          <h1 class="newsArticle__title"><?php the_title(); ?></h1>
          <time class="newsArticle__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
          <div class="newsArticle__main-img">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full', array('class' => 'detail__thumbnail')); ?>
            <?php else : ?>
              <img class="detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("./images/common/noimage.jpg")); ?>" alt="NoImage画像" />
            <?php endif; ?>
          </div>
          <div class="newsArticle__detail-content">
            <?php the_content(); ?>
            <div class="newsArticle__pagination">
              <?php $prev_link = get_previous_post_link('%link', '前の記事へ'); ?>
                <div class="newsArticle__btn newsArticle__btn--before">
                <?php
                    if (!empty($prev_link)) {
                      echo $prev_link;
                    }
                  ?>
                </div>
              <?php $next_link = get_next_post_link('%link', '次の記事へ'); ?>
                <div class="newsArticle__btn newsArticle__btn--after">
                  <?php
                    if (!empty($next_link)) {
                      echo $next_link;
                    }
                  ?>
                </div>
            </div>
          </div>
        </article>
        <aside class="newsArticle__sidebar sidebar">
          <div class="sidebar__item">
            <div class="sidebar__menu-label">
              <p class="sidebar__menu-title">最新記事</p>
            </div>
            <div class="sidebar__wrapper">
              <?php
              $args = array(
                "post_type" => "post",
                "posts_per_page" => 5,
                "orderby" => "date",
                "order" => "DESC",
              );
              $the_query = new WP_Query($args);
              ?>
              <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <a href="<?php the_permalink(); ?>" class="sidebar__content">
                    <div class="sidebar__img">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', array('class' => 'detail__img')); ?>
                      <?php else : ?>
                        <img class="detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("./images/common/noimage.jpg")); ?>" alt="NoImage画像" />
                      <?php endif; ?>
                    </div>
                    <div class="sidebar__body">
                      <p class="sidebar__content-title"><?php the_title(); ?></p>
                      <time class="sidebar__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    </div>
                  </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php else : ?>
                <p>記事が投稿されていません。</p>
              <?php endif; ?>
            </div>
          </div>
          <div class="sidebar__item">
            <div class="sidebar__menu-label">
              <p class="sidebar__menu-title">アーカイブ</p>
            </div>
            <ul class="sidebar__wrapper">
              <?php wp_get_archives('type=monthly&limit=3'); ?>
            </ul>
          </div>
          <div class="sidebar__item">
            <div class="sidebar__menu-label">
              <p class="sidebar__menu-title">カテゴリ</p>
            </div>
            <div class="sidebar__wrapper">
              <?php
              $categories = get_categories();
                foreach( $categories as $category ) {
                  echo '<a href="' . get_category_link($category->term_id) . '" class="sidebar__content"> <p class="sidebar__text">' . $category->name . '</p></a>';
                }
              ?>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>

  <?php get_template_part('/template-parts/contact'); ?>
</main>
<?php get_footer(); ?>