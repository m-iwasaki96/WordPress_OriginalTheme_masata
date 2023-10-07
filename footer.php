<footer class="footer">
      <div class="footer__inner">
        <nav class="footer__nav">
          <ul class="footer__items">
            <li class="footer__item">
              <a href="<?php echo esc_url(home_url("/")) ?>">top</a>
            </li>
            <li class="footer__item">
              <a href="<?php echo esc_url(home_url("/about")) ?>">about</a>
            </li>
            <li class="footer__item">
              <a href="<?php echo esc_url(home_url("/service")) ?>">service</a>
            </li>
            <li class="footer__item">
              <a href="<?php echo esc_url(home_url("/works")) ?>">works</a>
            </li>
            <li class="footer__item">
              <a href="<?php echo esc_url(home_url("/news")) ?>">news</a>
            </li>
            <li class="footer__item">
              <a href="<?php echo esc_url(home_url("/contact")) ?>">contact</a>
            </li>
            <li class="footer__item">
              <a href="<?php echo esc_url(home_url("/")) ?>">プライバシーポリシー</a>
            </li>
          </ul>
        </nav>
        <div class="footer__logo">
          <a href="<?php echo esc_url(home_url("/")) ?>" class="footer__link">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/common/reverse-logo.png")); ?>" alt="ExciteTravel">
          </a>
        </div>
        <div class="footer__icons">
          <i class="footer__social-icon fa-brands fa-facebook"></i>
          <i class="footer__social-icon fa-brands fa-twitter"></i>
          <i class="footer__social-icon fa-brands fa-instagram"></i>
        </div>
        <small class="footer__copyright">&copy;<?php echo wp_date("Y");?>&nbsp;ExciteTravel</small>
      </div>
    </footer>

<?php wp_footer(); ?>
</body>

</html>