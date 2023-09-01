<?php get_header(); ?>
<main>
  <?php if (function_exists('bcn_display')) { ?>
    <div class="commonBreadcrumb lowerArticle-head">
      <div class="commonBreadcrumb__body breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </div>
    </div>
  <?php } ?>
  <div class="worksDetail worksDetailLayout">
    <div class="worksDetail__inner inner">
      <div class="worksDetail__category">
        <p class="worksDetail__label">
        <?php
          $categories = get_the_terms(get_the_ID(), 'genre');
          if ( ! empty( $categories ) ) {
              foreach( $categories as $category ) {
                  echo '<span>' . esc_html( $category->name ) . '</span>';
              }
          }
        ?>
        </p>
      </div>
      <h1 class="worksDetail__title"><?php the_title(); ?></h1>
      <time class="worksDetail__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
      <div class="worksDetail__img">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('full'); ?>
        <?php else : ?>
            <img src="<?php echo esc_url(get_theme_file_uri("./images/common/noimage.jpg")); ?>" alt="NoImage画像" />
        <?php endif; ?>
      </div>
      <div class="worksDetail__content">
        <?php the_content(); ?>
        <div class="worksDetail__btn">
          <?php
            $h = $_SERVER['HTTP_HOST'];
            if (!empty($_SERVER['HTTP_REFERER']) && (strpos($_SERVER['HTTP_REFERER'],$h) !== false)) {
              echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">実績一覧に戻る</a>';
            }
          ?>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('/template-parts/contact'); ?>
</main>
<?php get_footer(); ?>