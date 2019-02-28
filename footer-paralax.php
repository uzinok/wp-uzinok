<footer class="page-header container page-header--footer page-header--lending" id="link">
    <div class="page-header__block-nav">
      <!-- <ul class="page-header__nav-list list-rezet">
        <li class="menu-item"><a href="/demo-js.html">Демки JS</a></li>
        <li class="menu-item"><a href="/demo-html-css-js.html">Демки CSS</a></li>
        <li class="menu-item"><a href="/thoughts.html">Думки</a></li>
        <li class="menu-item"><a href="/canvas_test.html">Демки canvas</a></li>
        <li class="menu-item"><a href="/svg.html">Демки SVG</a></li>
      </ul> -->
	  <?php wp_nav_menu(array(
                "theme_location" => "footer",
                "container" => nul,
                "menu_id" => "top",
                "menu_class" => "page-header__nav-list list-rezet",
                "depth" => 1,
            )); ?>
    </div>
    <div class="page-header__block-logo"><a href="index.html" class="page-header__logo-text"><svg viewBox="0 0 14 13"
          width="60" height="60" class="page-header__logo-svg">
          <path class="cat" fill="#303030" d="M12.9 6.9c0 2.5-2.6 4.7-5.7 4.7S1.4 9.4 1.4 6.9c0-1 .3-1.9 1-2.7.6-.7 1.5-1.3 2.5-1.6.7-.2 1.5-.3 2.3-.3 3.1-.1 5.7 2 5.7 4.6z"></path>
          <path class="ear1" fill="#303030" d="M11.6,0.8c0.4,1.1,0.3,2.3,0,3.4L9.1,2.8C10.2,1.7,11.1,0.9,11.6,0.8z"></path>
          <path class="ear" fill="#303030" d="M2.5,1c0.9,0.4,1.7,1.1,2.4,1.9L2.5,4.4C2,3.2,1.9,2,2.5,1L2.5,1z"></path>
          <ellipse class="eye" id="eye" fill="#FFF" cx="9.2" cy="6.6" rx="1.1" ry=".8"></ellipse>
          <ellipse class="eye" fill="#FFF" cx="4.8" cy="6.6" rx="1.1" ry=".8"></ellipse>
          <ellipse class="pupils" fill="#303030" cx="4.8" cy="6.65" rx=".2" ry=".5"></ellipse>
          <ellipse class="pupils" fill="#303030" cx="9.2" cy="6.65" rx=".2" ry=".5"></ellipse>
          <path class="moustache" stroke="#303030" stroke-width=".25" stroke-miterlimit="10" d="M13.8 8.1l-1.1-.2m1.2 2l-1.8-.8m1.1 2.5L11 10.1M.3 8.1l1.3-.2M.1 9.8l2-.8M.9 11.5l2.3-1.4"></path>
        </svg> uzinok.ru</a></div>
    <div class="page-header__block-nav">
      <ul class="page-header__nav-list list-rezet">
        <li class="menu-item"><a href="/shortcodes.html" style="opacity: 0.5;">Shortcodes</a></li>
      </ul>
    </div>
  </footer>
  <div class="up-down-arrow__btn btn"></div>
</body>
<script src="<?php get_template_directory_uri(); ?>/wp-content/themes/wp_uzinok/assets/js/jquery.min.js"></script>
<script src="<?php get_template_directory_uri(); ?>/wp-content/themes/wp_uzinok/assets/js/home_js.js"></script>
<?php wp_footer(); ?>

</html>
