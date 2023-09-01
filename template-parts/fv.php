<?php
  if (is_page('about')) {
    $imageSP = './images/common/aboutPage-mv-sp.jpg';
    $imagePC = './images/common/aboutPage-mv-pc.jpg';
    $mainTitle = 'about';
    $subTitle = '私たちについて';
  } elseif (is_page('service')) {
    $imageSP = './images/common/servicePage-mv-sp.jpg';
    $imagePC = './images/common/servicePage-mv-pc.jpg';
    $mainTitle = 'service';
    $subTitle = 'サービス紹介';
  } elseif (is_page('news')) {
    $imageSP = './images/common/newsPage-fv-sp.jpg';
    $imagePC = './images/common/newsPage-fv-pc.jpg';
    $mainTitle = 'news';
    $subTitle = 'お知らせ';
  } elseif (is_page('works')) {
    $imageSP = './images/common/worksPage-mv-sp.jpg';
    $imagePC = './images/common/worksPage-mv-pc.jpg';
    $mainTitle = 'works';
    $subTitle = '実績紹介';
  } elseif (is_page('contact') || is_page('confirm') || is_page('complete')) {
    $imageSP = './images/common/contactPage-mv-sp.jpg';
    $imagePC = './images/common/contactPage-mv-pc.jpg';
    $mainTitle = 'contact';
    $subTitle = 'お問い合わせ';
  } else {
    $imageSP = './images/common/noimage.jpg';
    $imagePC = './images/common/noimage.jpg';
    $mainTitle = 'not found';
    $subTitle = '背景画像とタイトルが設定されていません';
  }
?>

<div class="lower-mv lowerLayout">
  <div class="lower-mv__inner">
    <div class="lower-mv__img">
      <picture>
        <source srcset="<?php echo esc_url(get_theme_file_uri($imageSP)); ?>" media="(max-width: 768px)" />
        <img src="<?php echo esc_url(get_theme_file_uri($imagePC)); ?>" alt="ギャラリーに並ぶ車を横から映した様子" />
      </picture>
    </div>
    <div class="lower-mv__title">
      <h1 class="lower-mv__main-title"><?php echo $mainTitle; ?></h1>
      <p class="lower-mv__sub-title"><?php echo $subTitle; ?></p>
    </div>
  </div>
</div>