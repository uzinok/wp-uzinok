<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="http://uzinok.ru/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="http://uzinok.ru/img/favicon.ico" type="image/x-icon">
  <meta itemprop="image" content="http://uzinok.ru/img/cat-logo_64.png">
  <meta name="twitter:image:src" content="http://uzinok.ru/img/cat-logo_64.png">
  <meta property="og:image" content="http://uzinok.ru/img/cat-logo_64.png">

  <?php
wp_head();
?>

  <link rel='stylesheet' href='http://demo.uzinok.ru/wp-content/themes/wp_uzinok/assets/css/home.css?ver=5.1' type='text/css' />
</head>

<body>
  <div style="display: none;"><svg xmlns="http://www.w3.org/2000/svg">
      <symbol id="cat-logo" viewbox="0 0 117 92">
        <path d="M107.8 51.6c0 20.9-21.7 39.3-47.6 39.3S11.8 72.5 11.8 51.6c0-8.4 2.5-15.9 8.4-22.6 5-5.8 12.5-10.9 20.9-13.4 5.8-1.7 12.5-2.5 19.2-2.5 25.8-.8 47.5 16.8 47.5 38.5z"></path>
        <path d="M97 .6c3.3 9.2 2.5 19.2 0 28.4L76.1 17.4C85.3 8.2 92.8 1.5 97 .6zM20.9 2.3c7.5 3.3 14.2 9.2 20 15.9l-20 12.5c-4.1-10-5-20 0-28.4z"></path>
        <ellipse fill="#FFF" cx="76.9" cy="49.1" rx="9.2" ry="6.7"></ellipse>
        <ellipse fill="#FFF" cx="40.2" cy="49.1" rx="9.2" ry="6.7"></ellipse>
        <ellipse cx="40.2" cy="50.8" rx="1.7" ry="4.2"></ellipse>
        <ellipse cx="76.9" cy="50.8" rx="1.7" ry="4.2"></ellipse>
        <path stroke="#000" stroke-miterlimit="10" d="M115.3 61.6l-9.2-1.7m10.1 16.8l-15-6.7m9.1 20.9L91.9 78.3M2.6 61.6L13.4 60M.9 75.8l16.7-6.7M7.6 90l19.2-11.7"></path>
      </symbol>
      <symbol id="user_auth">
        <path d="M93 90.8H49V51.5H32.3L71 13.7l38.7 37.8H93v39.3zm18 18.9c2.6 0 4.7-2.1 4.7-4.7V75.9h11.2v29.8c0 8.4-6.8 15.2-15.2 15.2H30.4c-8.4 0-15.2-6.8-15.2-15.2V75.9h11.2V105c0 2.6 2.1 4.7 4.7 4.7H111z"></path>
        <path fill="none" d="M0 0h139v133H0z"></path>
      </symbol>
      <symbol id="user_no_auth">
        <path d="M99.1 113.7c2.6 0 4.7-2.1 4.7-4.7V79.9H115v29.8c0 8.4-6.8 15.2-15.2 15.2H18.5c-8.4 0-15.2-6.8-15.2-15.2V79.9h11.2V109c0 2.6 2.1 4.7 4.7 4.7h79.9zm-62-96H81V57h16.8L59.1 94.8 20.4 57h16.8V17.7h-.1z"></path>
        <path fill="none" d="M0 0h124v132H0z"></path>
      </symbol>
    </svg></div>
  <div class="body_background">
    <div class="body_background--paralax" id="body_background--paralax"></div>
  </div>
  <header class="page-header container page-header--nojs page-header--lending">
    <menu class="page-header__block-nav page-header__block-nav--closed">
      <?php wp_nav_menu(array(
"theme_location" => "header_paralax",
"container" => nul,
"menu_id" => "header_paralax",
"menu_class" => "page-header__nav-list list-rezet",
"depth" => 1,
)); ?>
    </menu>
    <div class="page-header__block-logo"><a href="index.html" class="page-header__logo-text"><svg viewBox="0 0 14 13"
          width="60" height="60" class="page-header__logo-svg" id="my_cat">
          <path class="cat" fill="#303030" d="M12.9 6.9c0 2.5-2.6 4.7-5.7 4.7S1.4 9.4 1.4 6.9c0-1 .3-1.9 1-2.7.6-.7 1.5-1.3 2.5-1.6.7-.2 1.5-.3 2.3-.3 3.1-.1 5.7 2 5.7 4.6z"></path>
          <path class="ear1" fill="#303030" d="M11.6,0.8c0.4,1.1,0.3,2.3,0,3.4L9.1,2.8C10.2,1.7,11.1,0.9,11.6,0.8z"></path>
          <path class="ear" fill="#303030" d="M2.5,1c0.9,0.4,1.7,1.1,2.4,1.9L2.5,4.4C2,3.2,1.9,2,2.5,1L2.5,1z"></path>
          <ellipse class="eye" id="eye" fill="#ffffff" cx="9.2" cy="6.6" rx="1.1" ry=".8"></ellipse>
          <ellipse class="eye" fill="#ffffff" cx="4.8" cy="6.6" rx="1.1" ry=".8"></ellipse>
          <ellipse class="pupils" fill="#303030" cx="4.8" cy="6.65" rx=".2" ry=".5"></ellipse>
          <ellipse class="pupils" fill="#303030" cx="9.2" cy="6.65" rx=".2" ry=".5"></ellipse>
          <path class="moustache" stroke="#303030" stroke-width=".25" stroke-miterlimit="10" d="M13.8 8.1l-1.1-.2m1.2 2l-1.8-.8m1.1 2.5L11 10.1M.3 8.1l1.3-.2M.1 9.8l2-.8M.9 11.5l2.3-1.4"></path>
        </svg>
        <?php bloginfo("name"); ?></a></div><button class="page-header__button-nav-toggle page-header__button-nav-toggle--closed"><span
        class="visually-hidden">открыть/закрыть меню</span></button>
    <div class="page-title">
      <div class="container">
        <p class="page-title__subtitle">Личный сайт. Сборка чего нибудь и для чего нибудь. по любым вопросам
          обращайтесь)) Не использую большие библиотеки, js демки делаю кроссбраузерно (либо есть возможность сделать
          кроссбраузерно), css демки без префиксеров.</p>
      </div>
    </div>
    <div class="page-title__block-btn"><a class="page-title__btn btn btn--default" href="#order-form" data-goto="#order-form"
        title="перейти к форме обратной связи">Написать</a>
      <!-- <a href="/authorisation.html" class="page-title__btn page-title__btn--user">Авторизоваться</a> -->
    </div>
  </header>