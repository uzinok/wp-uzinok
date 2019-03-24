<?php get_header("paralax"); ?>

<main class="page-main">

    <section class="container" id="interesting">
        <h2 class="section-header">Интересное</h2>
        <div class="slider slider--nojs">
            <ul class="slider__list list-rezet">
                <li class="slider__item slider__item--active">
                    <p class="slider__title">Почеши мне пузико</p>
                    <div class="demo__item">
                        <div class="two-demo">
                            <div class="two-demo__parent">
                                <div class="two-demo__head">
                                    <div class="two-demo__eye two-demo__eye--left"></div>
                                    <div class="two-demo__eye two-demo__eye--right"></div>
                                    <div class="two-demo__nose"></div>
                                    <div class="two-demo__mouth"></div>
                                </div>
                                <div class="two-demo__body">
                                    <div class="two-demo__paw two-demo__paw--left"></div>
                                    <div class="two-demo__paw two-demo__paw--right"></div>
                                    <div class="two-demo__navel"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <?php
global $post;
$args = array( 'numberposts' => 5 , 'category' => 0, 'orderby' => 'date');
$myposts = get_posts( $args );
foreach( $myposts as $post ){ setup_postdata($post);
?>
                <li class="slider__item testimonial">

                    <?php the_post_thumbnail('thumbnail'); ?>

                    <div class="post-txt">
                        <p class="slider__title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?></a>
                            <?php echo get_the_date('j F Y'); ?>
                        </p>


                        <?php the_excerpt(); ?>
                    </div>
                </li>
                <?php
}
wp_reset_postdata();
?>
            </ul><button class="slider__btn slider__previous btn btn--default"></button> <button class="slider__btn slider__next btn btn--default"></button>
            <div class="slider__progres-block"></div>
        </div>
    </section>
    <section class="container" id="order-form">
      <h2 class="section-header">Оставьте сообщение</h2>
      <form action="http://demo.uzinok.ru/php/feedback.php" class="order-form" id="form" method="POST">
        <p class="order-form__title">Все поля обязательны для заполнения на русском! (кроме E-mail)</p>
        <input name="name" type="text" class="order-form__control order-form__input-text" placeholder="Имя *" required>
        <input name="email" type="email" class="order-form__control order-form__input-text" placeholder="E-mail *"
          required>
        <textarea name="text" id="" cols="30" rows="10" placeholder="Введите сообщение *" class="order-form__control order-form__textarea"
          required></textarea>
        <div class="alert alert--danger" id="result_form" style="display: none;">
          <button class="alert__btn btn alert__btn--js" type="button"><span class="visually-hidden">Закрыть окно</span></button>
          <p class="alert__title">Ответ сервера</p>
          <p class="alert__text"></p>
        </div>
        <input class="order-form__submit btn" type="submit" value="отправить">
      </form>
    </section>

</main>

<?php get_footer("paralax"); ?>