<footer class="footer">
      <div class="footer__inner">
        <nav class="footer__nav">
          <ul class="footer__items">
            <li class="footer__item">
              <a href="#">top</a>
            </li>
            <li class="footer__item">
              <a href="#">about</a>
            </li>
            <li class="footer__item">
              <a href="#">service</a>
            </li>
            <li class="footer__item">
              <a href="#">works</a>
            </li>
            <li class="footer__item">
              <a href="#">news</a>
            </li>
            <li class="footer__item">
              <a href="#">contact</a>
            </li>
            <li class="footer__item">
              <a href="#">プライバシーポリシー</a>
            </li>
          </ul>
        </nav>
        <div class="footer__logo">
          <a href="#" class="footer__link">
            <img src="<?php echo esc_url(get_theme_file_uri("./images/common/reverse-logo.png")); ?>" alt="ExciteCode">
          </a>
        </div>
        <div class="footer__icons">
          <i class="footer__social-icon fa-brands fa-facebook"></i>
          <i class="footer__social-icon fa-brands fa-twitter"></i>
          <i class="footer__social-icon fa-brands fa-instagram"></i>
        </div>
        <small class="footer__copyright">&copy;<?php echo wp_date("Y");?>&nbsp;ExciteCode&nbsp;Automobile</small>
      </div>
    </footer>

<?php wp_footer(); ?>
</body>

</html>