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
</head>

<body>
    <div style="display: none;">
    <svg xmlns="http://www.w3.org/2000/svg">
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
        </svg>
    </div>
    <header class="page-header container page-header--nojs">
        <div class="page-header__block-logo">
            <a href="<?php bloginfo("url"); ?>" class="page-header__logo-text">
            <svg width="60" height="60" class="page-header__logo-svg">
                    <use xlink:href="#cat-logo"></use>
                </svg> 
                <?php bloginfo("name"); ?>
            </a>
        </div>
        <button class="page-header__button-nav-toggle page-header__button-nav-toggle--closed"><span
                class="visually-hidden">открыть/закрыть меню</span></button>
        <nav class="page-header__block-nav page-header__block-nav--closed">
            <?php wp_nav_menu(array(
                "theme_location" => "top",
                "container" => nul,
                "menu_id" => "top",
                "menu_class" => "page-header__nav-list list-rezet",
                "depth" => 1,
            )); ?>
        </nav>

    </header>
    