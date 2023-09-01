<div class="contact">
  <div class="contact__inner">
    <div class="contact__wrapper">
      <div class="contact__contents">
        <p class="contact__text">輸入車の購入や修理のご相談など<br>お気軽にお問い合わせください。</p>
        <div class="contact__btn">
          <a href="<?php echo esc_url(home_url("/contact")) ?>">
            <span><i class="contact__emailIcon fa-regular fa-envelope"></i>お問い合わせ</span>
          </a>
        </div>
        <div class="contact__btn">
          <a href="<?php echo esc_url(home_url("/")) ?>">
            <span><i class="contact__telIcon fa-solid fa-phone"></i>0000-000-000</span>
          </a>
        </div>
        <p class="contact__reception">受付時間 : 火曜日を除く 10：00〜18：00</p>
      </div>
      <div class="contact__img">
        <picture>
          <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri("/images/common/contact_sp.jpg")); ?>" />
          <img src="<?php echo esc_url(get_theme_file_uri("/images/common/contact_pc.jpg")); ?>" alt="展示されている車を写した様子" />
        </picture>
      </div>
    </div>
  </div>
</div>
