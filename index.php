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
                <li class="slider__item testimonial">
                    <!-- <img src="img/dal.jpg" alt="Владимир Иванович Даль" class="testimonial__avatar"> -->
                    <blockquote class="testimonial__info"><q class="testimonial__text">Только добрый и талантливый
                            народ может
                            сохранить величавое спокойствие духа и юмор в любых, и самых трудных, обстоятельствах.
                            Пословицы,
                            поговорки, прибаутки, рождаясь в недрах народных масс, говорят о здоровом, могучем
                            организме</q><address class="testimonial__address"><a href="/thoughts.html" class="page-link">Владимир
                                Иванович Даль</a></address></blockquote>
                </li>
                <li class="slider__item">
                    <p class="slider__title">Расслабся <a href="./snake.html" class="btn btn--lg btn--success">ТИЦ</a></p>
                    <p>Поиграй в змейку. Управление стрелками: вверх/вправо/вниз/влево.</p>
                </li>
            </ul><button class="slider__btn slider__previous btn btn--default"></button> <button class="slider__btn slider__next btn btn--default"></button>
            <div class="slider__progres-block"></div>
        </div>
    </section>
    <section class="container" id="order-form">
        <h2 class="section-header">Оставьте сообщение</h2>
        <form action="http://demo.uzinok.ru/php/feedback.php" class="order-form" id="form" method="POST">
            <p class="order-form__title">Все поля обязательны для заполнения на русском! (кроме E-mail)</p><input name="name"
                type="text" class="order-form__control order-form__input-text" placeholder="Имя *" required=""> <input
                name="email" type="email" class="order-form__control order-form__input-text" placeholder="E-mail *"
                required=""> <textarea name="text" id="" cols="30" rows="10" placeholder="Введите сообщение *" class="order-form__control order-form__textarea"
                required=""></textarea>
            <div class="alert alert--danger" id="result_form" style="display: none;"><button class="alert__btn btn alert__btn--js"
                    type="button"><span class="visually-hidden">Закрыть окно</span></button>
                <p class="alert__title">Ответ сервера</p>
                <p class="alert__text"></p>
            </div><input class="order-form__submit btn" type="submit" value="отправить">
        </form>
    </section>
</main>

<?php get_footer("paralax"); ?>