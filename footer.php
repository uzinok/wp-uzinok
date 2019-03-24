</main>
<footer class="page-header container page-header--footer">
  <nav class="page-header__block-nav">
    <!-- <ul class="page-header__nav-list list-rezet">
      <li class="page-header__nav-item"><a href="/thoughts.html" class="page-header__nav-link">Думки</a></li>
    </ul> -->
    <?php
      wp_nav_menu(array(
          "theme_location" => "footer",
          "container" => nul,
          "menu_id" => "footer",
          "depth" => 1,
          "menu_class" => "page-header__nav-list list-rezet"
      )); 
    ?>
  </nav>
  <div class="page-header__block-logo"><a href="<?php bloginfo("url"); ?>"><svg width="60" height="60" class="page-header__logo-svg">
    <use xlink:href="#cat-logo"></use>
  </svg></a></div>
</footer>
<div class="up-down-arrow__btn"></div>
</body>
<?php wp_footer(); ?>

</html>