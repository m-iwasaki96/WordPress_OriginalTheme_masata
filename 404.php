<?php get_header(); ?>
<main>
  <div class="error-page errorPage-contents">
    <div class="error-page__inner">
      <div class="error-page__img">
        <picture>
          <source srcset="<?php echo esc_url(get_theme_file_uri("./images/common/404-mv-sp.jpg")); ?>" media="(max-width: 768px)" />
          <img src="<?php echo esc_url(get_theme_file_uri("./images/common/404-mv-pc.jpg")); ?>" alt="荒野に通る道路の脇に立てられた404という標識の画像" />
        </picture>
        <div class="error-page__container">
          <h1 class="error-page__title">404&nbsp;Not&nbsp;Found</h1>
        </div>
        <div class="error-page__body">
          <p class="error-page__text">お探しのページはURLが誤っているか、削除された可能性があります。<br />3秒後にTOPページに遷移します</p>
          <div class="error-page__btn">
            <a href="#">topへ戻る</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>