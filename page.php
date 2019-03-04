<?php get_header(); ?>

<div class="page-title">
<div class="container">
  <h1 class="page-title__text">Привет мир!</h1>
  <p>Эй, цирюльникъ, ёжик выстриги, да щетину ряхи сбрей, феном вошь за печь гони!</p>
</div>
</div>

<main class="page-main page-main--aside">

<div class="container container-content">

<?php 
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <div>
                <p><?php the_title(); ?></p>
                <?php the_content(); ?>
            </div>
            <?php
        }
    }
?>

</div>

<aside class="container container-aside">
<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>