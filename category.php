<?php get_header(); ?>

<div class="page-title">
<div class="container">
  <h1 class="page-title__text">Привет мир!</h1>
  <p class="page-title__subtitle">Эй, цирюльникъ, ёжик выстриги, да щетину ряхи сбрей, феном вошь за печь гони!</p>
</div>
</div>

<main class="page-main page-main--aside">

<div class="container-content">

<?php 
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <div>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<p><?php the_time("F jS, Y"); ?><span><?php the_author(); ?></span></p>
								<p><?php the_tags("", "/"); ?></p>
								<?php the_post_thumbnail("thumbnail"); ?>
                <?php the_excerpt(); ?>
            </div>
            <?php
				}
				the_posts_pagination();
    }
?>



  <section class="container section buttons">
	<h2 class="section-header">Buttons</h2>
	<p class="page-text">
	  <button class="btn btn--xs btn--default">Default</button>
	  <button class="btn btn--xs btn--primary">Primary</button>
	  <button class="btn btn--xs btn--success">Success</button>
	  <button class="btn btn--xs btn--info">Info</button>
	  <button class="btn btn--xs btn--warning">Warning</button>
	  <button class="btn btn--xs btn--danger">Danger</button>
	  <button class="btn btn--xs" disabled>disabled</button>
	</p>
	<p class="page-text">
	  <button class="btn btn--sm btn--default">Default</button>
	  <button class="btn btn--sm btn--primary">Primary</button>
	  <button class="btn btn--sm btn--success">Success</button>
	  <button class="btn btn--sm btn--info">Info</button>
	  <button class="btn btn--sm btn--warning">Warning</button>
	  <button class="btn btn--sm btn--danger">Danger</button>
	  <button class="btn btn--sm" disabled>disabled</button>
	</p>
	<p class="page-text">
	  <button class="btn btn--default">Default</button>
	  <button class="btn btn--primary">Primary</button>
	  <button class="btn btn--success">Success</button>
	  <button class="btn btn--info">Info</button>
	  <button class="btn btn--warning">Warning</button>
	  <button class="btn btn--danger">Danger</button>
	  <button class="btn" disabled>disabled</button>
	</p>
	<p class="page-text">
	  <button class="btn btn--lg btn--default">Default</button>
	  <button class="btn btn--lg btn--primary">Primary</button>
	  <button class="btn btn--lg btn--success">Success</button>
	  <button class="btn btn--lg btn--info">Info</button>
	  <button class="btn btn--lg btn--warning">Warning</button>
	  <button class="btn btn--lg btn--danger">Danger</button>
	  <button class="btn btn--lg" disabled>disabled</button>
	</p>
  </section>

  <section class="container section features">
	<h2 class="section-header">features</h2>
	<ul class="features__list list-rezet">
	  <li class="features__item">
		<p class="features__title">33 буквы. Из журнала «Наука и жизнь»</p>
		<p class="features__text">Экс-граф? Плюш изъят. Бьём чуждый цен хвощ!</p>
	  </li>
	  <li class="features__item">
		<p class="features__title">Из «Виндоуса-95» (fontview.exe)</p>
		<p class="features__text">Съешь ещё этих мягких французских булок, да выпей [же] чаю. 1234567890.</p>
	  </li>
	  <li class="features__item">
		<p class="features__title">Из журнала «Наука и жизнь»</p>
		<p class="features__text">Эх, взъярюсь, толкну флегматика: «Дал бы щец жарчайших, Пётр!»</p>
	  </li>
	</ul>
  </section>

  <section class="container section tabs">
	<h2 class="section-header">Tab</h2>
	<div class="tabs__row">
	  <input type="radio" class="tabs__radio" name="tabs-radio" checked id="tabs-label-1">
	  <label for="tabs-label-1" class="tabs__label">
		Любя
	  </label>

	  <input type="radio" class="tabs__radio" name="tabs-radio" checked id="tabs-label-2">
	  <label for="tabs-label-2" class="tabs__label">
		Южно
	  </label>

	  <input type="radio" class="tabs__radio" name="tabs-radio" checked id="tabs-label-3">
	  <label for="tabs-label-3" class="tabs__label">
		Подъём
	  </label>

	  <div class="tabs__content">— Любя, съешь щипцы, — вздохнёт мэр, — кайф жгуч.
		33 буквы. Прислал Аркадий Чубрик</div>

	  <div class="tabs__content">Южно-эфиопский грач увёл мышь за хобот на съезд ящериц.
		Присутствуют все буквы. Автор — Александр Маленков</div>

	  <div class="tabs__content">Подъём с затонувшего эсминца легкобьющейся древнегреческой амфоры сопряжён с
		техническими
		трудностями.
		Присутствуют все буквы. Автор — Андрей Николаев (Легостаев)</div>
	</div>
  </section>

  <section class="container section spoiler">
	<h2 class="section-header">spoiler HTML</h2>
	<div class="spoiler__row">
	  <details class="spoiler__detalis" open>
		<summary class="spoiler__summary btn btn--default">Чтобы</summary>
		<div class="spoiler__content">Чтобы понять всю прелесть того или иного шрифта, необходимо иметь
		  представление
		  обо всех
		  знаках, которые в этом шрифте содержатся. Скажем, почти все русские шрифты страдают от чудовищных форм
		  букв
		  Ф, Д, Л.
		  Другие знаки тоже кривые, но это не так заметно с первого взгляда.</div>
	  </details>
	  <details class="spoiler__detalis">
		<summary class="spoiler__summary btn btn--default">Юный</summary>
		<div class="spoiler__content">Юный директор целиком сжевал весь объём продукции фундука (товара дефицитного
		  и
		  деликатесного), идя энергично через хрустящий камыш.</div>
	  </details>
	  <details class="spoiler__detalis">
		<summary class="spoiler__summary btn btn--default">Обдав</summary>
		<div class="spoiler__content">Обдав его удушающей пылью, множество ярких фаэтонов исчезло из цирка.
		  Присутствуют все буквы алфавита, кроме ё и ъ</div>
	  </details>
	</div>
  </section>

  <section class="container section">
	<h2 class="section-header">Slider</h2>
	<div class="slider slider--nojs">
	  <ul class="slider__list list-rezet">
		<li class="slider__item slider__item--active">
		  <p class="slider__title">Автор — Ziv</p>
		  <p class="slider__text">Однажды съев фейхоа, я, как зацикленный, ностальгирую всё чаще и больше по этому
			чуду.</p>
		</li>
		<li class="slider__item slider__item--icon">
		  <p class="slider__title">Автор — Павел Безбородкин</p>
		  <p class="slider__text">Вопрос футбольных энциклопедий замещая чушью: эй, где съеден ёж?</p>
		</li>
		<li class="slider__item slider__item--promo">
		  <p class="slider__title">Автор — Дмитрий Файнштейн</p>
		  <p class="slider__text">Борец за идею Чучхэ выступил с гиком, шумом, жаром и фырканьем на съезде — и в
			ящик.</p>
		</li>
		<li class="slider__item testimonial">
		  <img src="" alt="Аватарка" class="testimonial__avatar">
		  <blockquote class="testimonial__info">
			<q class="testimonial__text">Блеф разъедает ум, чаще цыгана живёшь беспокойно, юля — грех это!</q>
			<address class="testimonial__address"><a href="mailto:mail@mail.ru" class="page-link">Автор — Марина
				Соколова</a></address>
		  </blockquote>
		</li>
	  </ul>
	  <button class="slider__btn slider__previous btn btn--default"></button>
	  <button class="slider__btn slider__next btn btn--default"></button>
	  <div class="slider__progres-block"></div>
	</div>
  </section>

  <section class="container section">
	<h2 class="section-header">Alert</h2>
	<div class="alert alert--danger">
	  <button class="alert__btn btn alert__btn--js"><span class="visually-hidden">Закрыть окно</span></button>
	  <p class="alert__title">Автор — Ольга Корженевская</p>
	  <p class="alert__text">Государев указ: душегубцев да шваль всякую высечь, да калёным железом по щекам этих
		физиономий съездить!</p>
	</div>
	<div class="alert alert--warning">
	  <button class="alert__btn btn alert__btn--js"><span class="visually-hidden">Закрыть окно</span></button>
	  <p class="alert__title">Прислал Дима (по памяти из журнала «Пионер»)</p>
	  <p class="alert__text">Широкая электрификация южных губерний даст мощный толчок подъёму сельского хозяйства.</p>
	</div>
	<div class="alert alert--info">
	  <button class="alert__btn btn alert__btn--js"><span class="visually-hidden">Закрыть окно</span></button>
	  <p class="alert__title">Автор — Дмитрий Файнштейн</p>
	  <p class="alert__text">Твёрдый, как ъ, но и мягкий, словно ь, юноша из Бухары ищет фемину-москвичку для
		просмотра цветного экрана жизни.</p>
	</div>
	<div class="alert alert--success">
	  <button class="alert__btn btn alert__btn--js"><span class="visually-hidden">Закрыть окно</span></button>
	  <p class="alert__title">Из книги В. В. Шахиджаняна «Соло на клавиатуре»</p>
	  <p class="alert__text">Юный директор целиком сжевал весь объём продукции фундука (товара дефицитного и
		деликатесного), идя энергично через
		хрустящий камыш.</p>
	</div>
  </section>

  <section class="container section container--column">
	<div class="container container--two-column">
	  <h2 class="section-header">Testimonial</h2>
	  <div class="testimonial">
		<img src="" alt="Аватарка" class="testimonial__avatar">
		<blockquote class="testimonial__info">
		  <q class="testimonial__text">Государев указ: душегубцев да шваль всякую высечь, да калёным железом по
			щекам этих
			физиономий
			съездить!</q>
		  <address class="testimonial__address"><a href="mailto:mail@mail.ru" class="page-link">Автор — Ольга
			  Корженевская</a></address>
		</blockquote>
	  </div>
	  <div class="testimonial">
		<img src="" alt="Аватарка" class="testimonial__avatar">
		<blockquote class="testimonial__info">
		  <q class="testimonial__text">Блеф разъедает ум, чаще цыгана живёшь беспокойно, юля — грех это!</q>
		  <address class="testimonial__address"><a href="mailto:mail@mail.ru" class="page-link">Автор — Марина
			  Соколова</a></address>
		</blockquote>
	  </div>
	</div>
	<div class="container container--two-column">
	  <h2 class="section-header">Blockquote</h2>
	  <blockquote class="blockquote">
		<p class="blockquote__text">Твёрдый, как ъ, но и мягкий, словно ь, юноша из Бухары ищет фемину-москвичку
		  для
		  просмотра
		  цветного
		  экрана жизни.</p>
		<footer class="blockquote__footer">
		  <p class="blockquote__footer__text">
			<cite class="cite" title="Название источника">
			  Source Title
			</cite>
		</footer>
	  </blockquote>
	  <blockquote class="blockquote">
		<p class="blockquote__text">Юный директор целиком сжевал весь объём продукции фундука (товара дефицитного и
		  деликатесного), идя энергично через
		  хрустящий камыш.</p>
		<footer class="blockquote__footer">
		  <cite class="cite" title="Название источника">
			Из книги В. В. Шахиджаняна «Соло на клавиатуре»
		  </cite>
		</footer>
	  </blockquote>
	</div>
  </section>

  <section class="container container--column">
	<div class="container container--two-column">
	  <address class="address">
		<h3 class="address__title">Контакты</h3>
		<p class="address__text">E-mail: <a class="page-link" href="mailto:someone@example.com">email@email.com</a></p>
		<p class="address__text">Телефон: +7 (999) 123 45 67</p>
		<p class="address__text">Факс: +7 (999) 123 45 67</p>
		<h3 class="address__title">Адрес</h3>
		<p class="address__text">Ул. 1-е января. д 1/1, кв 100</p>
		<p class="address__text">Волгоград, 400400</p>
		<p class="address__text">Россия</p>
	  </address>
	</div>
	<div class="container container--two-column">
	  <form action="#" class="order-form">
		<p class="order-form__title">Оставьте сообщение</p>
		<input name="#" type="text" class="order-form__control order-form__input-text" placeholder="Имя">
		<input name="#" type="email" class="order-form__control order-form__input-text" placeholder="E-mail">
		<textarea name="#" id="#" cols="30" rows="10" placeholder="Введите сообщение" class="order-form__control order-form__textarea"></textarea>
		<button class="order-form__submit btn">Отправить</button>
	  </form>
	</div>
  </section>

</div>

<aside class="container container-aside">
<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>

