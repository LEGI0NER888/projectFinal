{% extends "base.mvc.php" %}




{% block title %}Artists{% endblock %}


{% block body %}
<link rel="stylesheet" href="/css/users.css">

<header class="header">
	<div class="header__wrapper">
		<div class="header__logo">
			<img src="..//img/logo.png" type="image/png" alt="Логотип">
		</div>
		<div class="header__title">
			<p><a href="index.html">MOONBOOK</a></p>
		</div>
		<nav class="header__nav">
			<div class="header__nav-item"><a href="eventsMain.html">Выступления</a></div>
			<div class="header__nav-item"><a href="artistsMain.html">Артисты</a></div>
			<div class="header__nav-item"><a href="#about-us">О нас</a></div>
		</nav>

		<a href=""><img src="/img/user.png" alt="" class="user-login-img"></a>

		<button class="btn-pop header__buy-button">Купить <br>билеты</button>

		<div class="popup__bg">
			<div class="auth-block">
				<p> Для бронирования билета необходимо войти в аккаунт: </p>
				<form class="auth-block__form" action="/login" method="post">
					<label for="login">Почта</label>
					<input name="login" id="login" class="input" type="email">
					<label for="password">Пароль</label>
					<input name="password" id="password" class="input" type="password">
					<button type="submit" id="submit">Войти</button>
				</form>
				<a href="/user/regform">Зарегистрироваться</a>
			</div>
		</div>




		<button id="burger"><img src="../img/icons/menu.svg" class="header__menu-burger" alt="Menu burger"></button>
		<nav class="menu" id="menu">
			<ul class="menu__list">
				<li class="menu__item">
					<a class="menu__link" href="#">
						Выступления
					</a>
				</li>
				<li class="menu__item">
					<a class="menu__link" href="#">
						Артисты
					</a>
				</li>
				<li class="menu__item">
					<a class="menu__link" href="#about-us">
						О нас
					</a>
				</li>
				<li class="btn-pop menu__item">
					<a class="menu__link" href="#">
						Купить билеты
					</a>
				</li>
			</ul>
		</nav>

	</div>
</header>




<main class="wrapper">
	<a href="/artists/new">
		<section class="section artist-block ">
			New Artist
			<br>
			<br>
			ADD
		</section>
	</a>

	<!-- <section class="section ">
		<p><a href="/artists/delete{id}">Delete</a></p>

	</section>
	<section class="section ">
		<p><a href="/artists/edit">Edit</a></p>
	</section> -->

	{% foreach ($artists as $artist): %}
	<a href="/artists/{{ artist['ID'] }}/show">
		<section class="section artist-block">

			<p class="artist-block__title">{{ artist["Nickname"] }}</p>


		</section>
	</a>






	{% endforeach; %}
</main>
<button><img src="..//img/icons/chat.svg" class="chat-button" alt="Chat button"></button>
<footer class="footer">
	<div class="footer__wrapper">
		<p class="copyright">
			Сайт создан MASS FRACTION&copy
		</p>
		<p class="copyright">
			All rights reserved
		</p>
	</div>
</footer>


{% endblock %}