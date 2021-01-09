<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/jScrollPane/2.2.2/style/jquery.jscrollpane.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />
	<link rel="stylesheet" href="css/style.min.css">
	<title>Skovorodka</title>
</head>

<body>
	<div class="wrapper">
		<header class="header lock-padding">
	<div class="header__top top-header">
		<div class="container">
			<div class="top-header__row">
				<div class="top-header__column" style="align-self: center;">
					<a href="index.php"><img src="img/header/head-logo.png" class="top-header__logo"></img></a>
					<a href="index.php"><img src="img/header/head-logo-sm.png" class="top-header__logo-sm"></img></a>
				</div>
				<div class="top-header__column">
					<a href="tel:380999999999" class="top-header__phone">+38 (099) 999 99 99</a>
				</div>
				<div class="top-header__column top-header__addition">
					<div class="top-header__info info-header">
						<div class="info-header__column">
							<a href="##" class="info-header__contacts"><span>Контакты</span></a>
						</div>
						<div class="info-header__column">
							<a href="##" class="info-header__delivery"><span>Доставка и оплата</span></a>
						</div>
						<div class="info-header__column">
							<div id="info-header__language" class="info-header__language">
								<span>UA</span>
								<ul class="info-header__language-dropdown">
									<li><a href="index.ru.php">RU</a></li>
									<li><a href="index.en.php">EN</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="top-header__profile">
						<div id="top-header__user" class="top-header__user">
							<span>Наталья</span>
							<ul class="top-header__profile-dropdown">
								<li><a href="##" class="top-header__user-icon">Наталья</a></li>
								<li><a href="personal_acc.php" class="top-header__profile-icon">Мой профиль</a></li>
								<li><a href="#auth-popup" class="top-header__logout-icon popup-link">Выйти</a></li>
							</ul>
						</div>
						<div id="top-header__non-user" class="top-header__non-user">
							<span>Войти</span>
						</div>
					</div>
					<div class="top-header__cart-tmp"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="header__bottom bottom-header">
		<div class="container">
			<div class="bottom-header__row">
				<div class="bottom-header__column">
					<ul class="bottom-header__nav nav-bottom">
						<li class="nav-bottom__item">
							<div class="nav-bottom__main-dish"><a href="#"><span>ОСНОВНЫЕ БЛЮДА</span></a></div>
						</li>
						<li class="nav-bottom__item">
							<div class="nav-bottom__soup"><a href="#"><span>СУПЫ</span></a></div>
						</li>
						<li class="nav-bottom__item ">
							<div class="nav-bottom__salate"><a href="#"><span>САЛАТЫ</span></a></div>
						</li>
						<li class="nav-bottom__item ">
							<div class="nav-bottom__lapsha"><a href="#"><span>ЛАПША</span></a></div>
						</li>
						<li class="nav-bottom__item ">
							<div class="nav-bottom__bliny">
								<a href="#"><span>БЛИНЫ</span></a>
							</div>
						</li>
						<li class="nav-bottom__item ">
							<div class="nav-bottom__garniry"><a href="#"><span>ГАРНИРЫ</span></a></div>
						</li>
						<li class="nav-bottom__item ">
							<div class="nav-bottom__napitki"><a href="#"><span>НАПИТКИ</span></a></div>
						</li>
						<li class="nav-bottom__item ">
							<div class="nav-bottom__deserty"><a href="#"><span>ДЕСЕРТЫ</span></a></div>
						</li>
					</ul>
				</div>
				<div class="bottom-header__column">
					<div data-da="top-header__cart-tmp, 0, 992" class="bottom-header__cart header-cart">
						<a class="header-cart__btn btn1" id="header-cart__btn" href="#header-cart__cart-block">
							<span class="header-cart__count">3</span>
							<span class="header-cart__price"><span>360</span> грн</span>
						</a>
						<div class="header-cart__cart-block block-cart" id="header-cart__cart-block">
							<div class="block-cart__body" id="block-cart__body">
								<div class="block-cart__column">
									<div class="block-cart__dishes dishes-blockcart">
										<div class="dishes-blockcart__body">
											<div class="dishes-blockcart__column">
												<div class="dishes-blockcart__item">
													<div class="dishes-blockcart__row">
														<div class="dishes-blockcart__img">
															<img src="img/header/cart-blin.png" alt="blin">
														</div>
														<div class="dishes-blockcart__count-name">
															<div class="dishes-blockcart__name">Блин с ветчиной и сыром</div>
															<div class="dishes-blockcart__count">1 шт.</div>
														</div>
														<div class="dishes-blockcart__del-price">
															<div class="dishes-blockcart__del"></div>
															<div class="dishes-blockcart__price">120 грн</div>
														</div>
													</div>
												</div>
												<div class="dishes-blockcart__item">
													<div class="dishes-blockcart__row">
														<div class="dishes-blockcart__img">
															<img src="img/header/cart-blin.png" alt="blin">
														</div>
														<div class="dishes-blockcart__count-name">
															<div class="dishes-blockcart__name">Блин с ветчиной и сыром</div>
															<div class="dishes-blockcart__count">1 шт.</div>
														</div>
														<div class="dishes-blockcart__del-price">
															<div class="dishes-blockcart__del"></div>
															<div class="dishes-blockcart__price">120 грн</div>
														</div>
													</div>
												</div>
												<div class="dishes-blockcart__item">
													<div class="dishes-blockcart__row">
														<div class="dishes-blockcart__img">
															<img src="img/header/cart-blin.png" alt="blin">
														</div>
														<div class="dishes-blockcart__count-name">
															<div class="dishes-blockcart__name">Блин с ветчиной и сыром</div>
															<div class="dishes-blockcart__count">1 шт.</div>
														</div>
														<div class="dishes-blockcart__del-price">
															<div class="dishes-blockcart__del"></div>
															<div class="dishes-blockcart__price">120 грн</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="block-cart__topay">
										<div class="block-cart__topay-info">К оплате <span>360</span> грн</div>
										<a href="cart.php" class="block-cart__topay-btn btn1">Перейти в корзину</a>
									</div>
									<div class="block-cart__recommendation recommendation-blockcart">
										<div class="recommendation-blockcart__title">Наши рекомендации</div>
										<div class="recommendation-blockcart__slider slider-blockcart">
											<div class="slider-blockcart__item">
											</div>
											<div class="slider-blockcart__item">
											</div>
											<div class="slider-blockcart__item">
											</div>
											<div class="slider-blockcart__item">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="block-cart__body" id="block-cart__body">
								<div class="block-cart__column">
									<div class="block-cart__empty">
										<div class="block-cart__empty-title">Здесь ничего нет...</div>
										<div class="block-cart__empty-description">Вы забыли добавить товар в корзину</div>
										<div class="block-cart__empty-img">
											<img src="img/header/empty-cart.png" alt="Корзина">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="white-line"></div>
</header>
		<div class="content">
			<div class="account">
				<div class="container">
					<h1 class="account__title">Личный кабинет</h1>
					<div class="account__info info-account">
						<div class="info-account__column">
							<div class="info-account__row">
								<p class="info-account__subtitle">Имя:</p>
								<p class="info-account__subtitle">Наталья</p>
							</div>
							<div class="info-account__row">
								<p class="info-account__subtitle">Номер телефона:</p>
								<p class="info-account__subtitle">+38 099 999 99 99</p>
							</div>
							<div class="info-account__row">
								<p class="info-account__subtitle">День рождения:</p>
								<p class="info-account__subtitle">30 октября</p>
							</div>
							<div class="info-account__row">
								<p class="info-account__subtitle">e-mail:</p>
								<p class="info-account__subtitle">kokosha@mail.ru</p>
							</div>
							<div class="info-account__row">
								<p class="info-account__subtitle">Промокод:</p>
								<div class="info-account__subtitle">
									<div class="info-account__promo promo-account">
										<input class="promo-account__input" placeholder="Ввести промокод" type="text">
										<input class="promo-account__btn" type="button" value="ПРИМЕНИТЬ ПРОМОКОД">
									</div>
									<div class="pretty p-default p-round promo-account__getpromo">
										<input type="checkbox" name="promo-account__getpromo" />
										<div class="state p-primary">
											<label>Получать промокод после заказов</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="account__card card-account">
						<p class="card-account__info">
							<img class="card-account__foto" src="img/pers_acc/card.png" alt="card">
							<input class="card-account__deletecardbtn" type="button" value="УДАЛИТЬ КАРТУ">
						</p>
					</div>
					<div class="account__logoutbtn">
						<input type="button" value="ВЫЙТИ ИЗ ЛИЧНОГО КАБИНЕТА">
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
	<div class="footer__top top-footer">
		<div class="container">
			<div class="top-footer__row accordion">
				<div class="top-footer__column accordion__item accordion-item">
					<div class="top-footer__title accordion-item__trigger"><span>Информация</span></div>
					<ul class="top-footer__nav accordion-item__content">
						<li><a href="##"><span>Корпоративные заказы</span></a></li>
						<li><a href="##"><span>Работа в SKOVORODKA</span></a></li>
						<li><a href="##"><span>О нас</span></a></li>
						<li><a href="##"><span>Контакты</span></a></li>
						<li class="top-footer__delivery">
							<a href="#auth-popup" class="top-footer__delivery popup-link"><span>Доставка и оплата</span></a>
						</li>
					</ul>
				</div>
				<div class="top-footer__column accordion__item  accordion-item">
					<div class="top-footer__title accordion-item__trigger"><span>Партнерам</span></div>
					<ul class="top-footer__nav accordion-item__content">
						<li><a href="##"><span>Ищем поставщиков</span></a></li>
						<li><a href="##"><span>Предложить помещение</span></a></li>
					</ul>
				</div>
				<div class="top-footer__column accordion__item accordion-item">
					<div class="top-footer__title accordion-item__trigger"><span>Cвязаться</span></div>
					<ul class="top-footer__nav contacts-footer accordion-item__content">
						<li><span>Пн - Вс: 10:00 - 23:00</span></li>
						<li><span>Киев, Крещатик, 1</span></li>
						<li><a href="tel:380999999999"><span>+38 099 999 99 99</span></a></li>
						<li><a href="mailto:manager@gmail.com"><span>manager@skovorodka.ua</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__bottom bottom-footer">
		<div class="container">
			<div class="bottom-footer__row">
				<div class="bottom-footer__copyright"><span>SKOVORODKA.UA &copy; 2020</span></div>
				<div class="bottom-footer__media">
					<a href="https://www.facebook.com/" class="bottom-footer__facebook"></a>
					<a href="https://www.instagram.com/" class="bottom-footer__instagram"></a>
				</div>
			</div>
		</div>
	</div>
</footer>
	</div>
	<div class="popup" id="reg-popup">
	<div class="popup__body">
		<div class="popup__content">
			<a href="#" class="popup__close close-popup"><span>&times;</span></a>
			<div class="popup__title">Регистрация</div>
			<div class="popup__second-title">Детали учетной записи</div>
			<div class="popup__notes">Поля, помеченные звездочкой, обязательны для заполнения</div>
			<div class="popup__inner">
				<div class="popup__reg">
					<p class="popup__subtitle">Логин<span class="popup__star">*</span></p>
					<input type="text" name="login" class="popup__field" id="reg-login">
					<p class="popup__subtitle">e-mail<span class="popup__star">*</span></p>
					<input type="text" name="email" class="popup__field" id="reg-email">
					<p class="popup__subtitle">Придумайте пароль<span class="popup__star">*</span></p>
					<input type="text" name="password" class="popup__field" id="reg-password">
					<p class="popup__subtitle">Подтвердите пароль<span class="popup__star">*</span></p>
					<input type="text" name="password2" class="popup__field" id="reg-password2">
					<p class="popup__subtitle">Укажите адрес проживания</p>
					<p class="popup__notes">Понадобится для оформления заказа</p>
					<input type="text" placeholder="Улица" name="address" class="popup__field" id="reg-address">
					<div class="popup__address address-popup">
						<div class="address-popup__item">
							<input type="text" placeholder="Дом" name="house-number" class="address-popup__small-field"
								id="reg-house-number">
						</div>
						<div class="address-popup__item">
							<input type="text" placeholder="Квартира" name="apartment-number"
								class="address-popup__small-field" id="reg-apartment-number">
						</div>
						<div class="address-popup__item">
							<input type="text" placeholder="Подъезд" name="entrance-number" class="address-popup__small-field"
								id="reg-entrance-number">
						</div>
						<div class="address-popup__item">
							<input type="text" placeholder="Код двери" name="door-code" class="address-popup__small-field"
								id="reg-door-code">
						</div>
						<div class="address-popup__item">
							<input type="text" placeholder="Этаж" name="floor" class="address-popup__small-field"
								id="reg-floor">
						</div>
					</div>
					<input type="button" value="Подтвердить регистрацию" class="popup__register">
				</div>
				<p class="popup__toauth">Уже есть аккаунт? <a href="#auth-popup" class="popup-link"><span
							class="popup__reg-link">Авторизоваться</span></a>
				</p>
				<p class="popup__tomain"><a class="popup__tomain-link close-popup" href="##">На главную</a></p>
			</div>
		</div>
	</div>
</div>
<div class="popup" id="auth-popup">
	<div class="popup__body">
		<div class="popup__content">
			<a href="#" class="popup__close close-popup"><span>&times;</span></a>
			<div class="popup__title">Авторизация</div>
			<div class="popup__inner">
				<div class="popup__socials">
					<p>Войти через:</p>
					<img src="img/reg_auth/socialmedia-icons.png" alt="Socials">
				</div>
				<div class="popup__auth">
					<p class="popup__subtitle bold">Имя пользователя</p>
					<input type="text" name="name" class="popup__field" id="auth-name">
					<p class="popup__subtitle bold">Пароль</p>
					<input type="text" name="password" class="popup__field" id="auth-password">
					<a href="##" class="popup__woutpassword">Забыли пароль?</a>
					<div class="pretty p-default p-round popup__rememberme">
						<input type="checkbox" name="popup__rememberme" />
						<div class="state p-primary">
							<label>Запомнить меня</label>
						</div>
					</div>
					<input type="button" value="Войти" class="popup__signin">
				</div>
				<p class="popup__toreg">Нет аккаунта? <a href="#reg-popup" class="popup-link"><span
							class="popup__reg-link">Регистрация</span></a>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="popup" id="constructor-popup">
	<div class="popup__body">
		<div class="popup__content constructor-popup__content">
			<a href="#" class="popup__close close-popup"><span>&times;</span></a>
			<div class="popup__title">Конструктор блинов</div>
			<div class="popup__inner">
				<div class="popup__fillings fillings-popup">
					<div class="fillings-popup__title">Выберите начинки</div>
					<div class="fillings-popup__body">
						<div class="fillings-popup__row">
							<div class="fillings-popup__column">
								<div class="fillings-popup__item"><span class="fillings-popup__sweet">Сладкие</span></div>
							</div>
							<div class="fillings-popup__column">
								<div class="fillings-popup__item"><span class="fillings-popup__nourishing">Сытные</span></div>
							</div>
							<div class="fillings-popup__column">
								<div class="fillings-popup__item"><span class="fillings-popup__vegetables">Овощи</span></div>
							</div>
							<div class="fillings-popup__column">
								<div class="fillings-popup__item"><span class="fillings-popup__fish">Рыба</span></div>
							</div>
							<div class="fillings-popup__column">
								<div class="fillings-popup__item"><span class="fillings-popup__sauces">Соусы</span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="popup__constructor constructor-popup">
					<div class="constructor-popup__row">
						<img src="img/constructor/blin.png" alt="" class="constructor-popup__img">
						<fieldset class="constructor-popup__ingredients ingredients-popup">
							<legend class="ingredients-popup__legend">Ингредиенты</legend>
							<div class="ingredients-popup__body">
								<div class="ingredients-popup__column">
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Основа</div>
										<div class="ingredients-popup__price1">12 грн</div>
										<div class="ingredients-popup__count"></div>
										<div class="ingredients-popup__pricen">48 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Сыр</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__cheese" type="text" value="2" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">30 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Грибы</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__mushrooms" type="text" value="1" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">0 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Омлет</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__omelet" type="text" value="1" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">15 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Курица</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__chicken" type="text" value="0" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">0 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Свинина</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__pork" type="text" value="0" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">0 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Бекон</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__bacon" type="text" value="3" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">45 грн</div>
									</div>
									<div class="ingredients-popup__item">
										<div class="ingredients-popup__subtitle">Копчености</div>
										<div class="ingredients-popup__price1">15 грн</div>
										<div class="ingredients-popup__count">
											<span class="cutlery-cart__count-counter">
												<button class="cutlery-cart__count-minus">-</button>
												<input id="ingredients-popup__smoked" type="text" value="2" disabled>
												<button class="cutlery-cart__count-plus">+</button>
											</span>
										</div>
										<div class="ingredients-popup__pricen">30 грн</div>
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset class="constructor-popup__selected selected-popup">
							<legend class="selected-popup__legend">Выбрано</legend>
							<div class="selected-popup__body">
								<div class="selected-popup__column">
									<div class="selected-popup__item">
										<div class="selected-popup__subtitle">Сыр</div>
										<div class="selected-popup__count">x2</div>
										<div class="selected-popup__delete-btn"></div>
									</div>
									<div class="selected-popup__item">
										<div class="selected-popup__subtitle">Омлет</div>
										<div class="selected-popup__count">x2</div>
										<div class="selected-popup__delete-btn"></div>
									</div>
									<div class="selected-popup__item">
										<div class="selected-popup__subtitle">Бекон</div>
										<div class="selected-popup__count">x2</div>
										<div class="selected-popup__delete-btn"></div>
									</div>
									<div class="selected-popup__item">
										<div class="selected-popup__subtitle">Зелень (петрушка + укроп)</div>
										<div class="selected-popup__count">x2</div>
										<div class="selected-popup__delete-btn"></div>
									</div>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
				<a class="btn1 popup__tocart" href="##">В корзину <span>120 грн</span></a>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="popup" id="selection-popup">
	<div class="popup__body">
		<div class="popup__content selection-popup__content">
			<a href="#" class="popup__close close-popup"><span>&times;</span></a>
			<div class="popup__inner">
				<div class="popup__selection selection-popup">
					<div class="selection-popup__row">
						<img src="img/selection/pasta.png" alt="pasta" class="selection-popup__img">
						<div class="selection-popup__column">
							<div class="selection-popup__info">
								<div class="selection-popup__title">Паста Болоньезе</div>
								<div class="selection-popup__count">1 шт.</div>
								<div class="selection-popup__description">Паста, мясной соус болоньезе, моцарелла, итальянские
									травы</div>
								<div class="selection-popup__price">120 грн</div>
								<div class="selection-popup__counter">
									<span class="cutlery-cart__count-counter">
										<button class="cutlery-cart__count-minus">-</button>
										<input id="selection-popup__pasta" type="text" value="2" disabled>
										<button class="cutlery-cart__count-plus">+</button>
									</span>
								</div>
							</div>
							<textarea placeholder="Комментарий к заказу..." name="selection-popup__textarea"
								id="selection-popup__textarea" class="selection-popup__textarea"></textarea>
							<a href="##" class="selection-popup__tocart-btn btn1">В КОРЗИНУ за <span>120 грн</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="js/script.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
		integrity="sha512-rCjfoab9CVKOH/w/T6GbBxnAH5Azhy4+q1EXW5XEURefHbIkRbQ++ZR+GBClo3/d3q583X/gO4FKmOFuhkKrdA=="
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jScrollPane/2.2.2/script/jquery.jscrollpane.min.js"
		integrity="sha512-EqofP+sBEn/OWcyAINAUnewpwC0e9zc0GvyiVeE3qeHYxqtdCcNocVBUiZhGWbPFWGTWxfJ60CcOK6HQ6G7uiw=="
		crossorigin="anonymous"></script>
</body>

</html>