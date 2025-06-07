<!-- フッターここまで -->
  <footer class="footer">
    <div class="container_other">
      <div class="logo">
        <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.svg" alt="企業ログ"></a>
      </div>
      <div class="menu">
        <a href="<?php echo get_template_directory_uri(); ?>/clinic.html" class="navlist">医院と医師</a>
        <a href="<?php echo get_template_directory_uri(); ?>/treat.html" class="navlist">診療</a>
        <a href="<?php echo get_template_directory_uri(); ?>/news.html" class="navlist">お知らせ</a>
      </div>
    </div>
    <div class="copyright"><small>Copyright &copy;さわやか歯科クリニック All Rights Reserved.</small>
    </div>
  </footer>
<!-- フッターここまで -->

  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <?php wp_footer(); ?>
</body>
</html>