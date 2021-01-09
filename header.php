<header class="header lock-padding">
	<div class="header__top top-header">
		<div class="container">
			<div class="top-header__row">
				<div class="top-header__column" style="align-self: center;">
					<a href="index.php"><img src="img/header/head-logo.png" class="top-header__logo"></a>
					<a href="index.php"><img src="img/header/head-logo-sm.png" class="top-header__logo-sm"></a>
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
						<?php if(isset($_SESSION["user"])){ ?>
							<div id="top-header__user" class="top-header__user">
								<span><?php echo $_SESSION["user"]['login']?></span>
								<ul class="top-header__profile-dropdown">
									<li><a href="##" class="top-header__user-icon"><?php echo $_SESSION["user"]['login']?></a></li>
									<li><a href="personal_acc.php" class="top-header__profile-icon">Мой профиль</a></li>
									<!-- href="#auth-popup" -->
									<li><a  onclick="logout()" class="top-header__logout-icon popup-link">Выйти</a></li>
								</ul>
							</div>
						<?php } else { ?>
							<div id="top-header__non-user" class="top-header__non-user" onclick="popupOpen(getElementById('auth-popup'));">
								<span>Войти</span>
							</div>
						<?php } ?>
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
							<div class="nav-bottom__main-dish">
								<a href="#main-dishes" class="nav-bottom__triggers-item"><span href="#main-dishes">ОСНОВНЫЕ
										БЛЮДА</span></a>
							</div>
						</li>
						<li class="nav-bottom__item">
							<div class="nav-bottom__soup">
								<a href="#soups" class="nav-bottom__triggers-item"><span href="#soups">СУПЫ</span></a>
							</div>
						</li>
						<li class="nav-bottom__item ">
							<div class="nav-bottom__salate">
								<a href="#salads" class="nav-bottom__triggers-item"><span href="#salads">САЛАТЫ</span></a>
							</div>
						</li>
						<li class="nav-bottom__item ">
							<div class="nav-bottom__lapsha">
								<a href="#noodles" class="nav-bottom__triggers-item"><span href="#noodles">ЛАПША</span></a>
							</div>
						</li>
						<li class="nav-bottom__item ">
							<div class="nav-bottom__bliny">
								<a href="#pancakes" class="nav-bottom__triggers-item"><span href="#pancakes">БЛИНЫ</span></a>
							</div>
						</li>
						<li class="nav-bottom__item ">
							<div class="nav-bottom__garniry">
								<a href="#side-dishes" class="nav-bottom__triggers-item"><span
										href="#side-dishes">ГАРНИРЫ</span></a>
							</div>
						</li>
						<li class="nav-bottom__item ">
							<div class="nav-bottom__napitki">
								<a href="#drinks" class="nav-bottom__triggers-item"><span href="#drinks">НАПИТКИ</span></a>
							</div>
						</li>
						<li class="nav-bottom__item ">
							<div class="nav-bottom__deserty">
								<a href="#desserts" class="nav-bottom__triggers-item"><span href="#desserts">ДЕСЕРТЫ</span></a>
							</div>
						</li>
					</ul>
				</div>
				<div class="bottom-header__column">
					<div data-da="top-header__cart-tmp, 0, 992" class="bottom-header__cart header-cart">
						<a class="header-cart__btn btn1" id="header-cart__btn" href="#header-cart__cart-block">
							<span class="header-cart__count"><?php echo isset($_SESSION["cart"]) ? count($_SESSION["cart"]) : 0 ?></span>
							<?php
								$totalprice = 0;
								if(isset($_SESSION["cart"]))
									foreach ($_SESSION["cart"] as $good)
										$totalprice += $good["price"];
							?>
							<span class="header-cart__price"><span><?php echo $totalprice; ?></span> грн</span>
						</a>
						<div class="header-cart__cart-block block-cart" id="header-cart__cart-block">
							<?php
							if(isset($_SESSION["cart"]) && count($_SESSION["cart"])>0){?>
								<div class="block-cart__body" id="block-cart__body">
									<div class="block-cart__column">
										<div class="block-cart__dishes dishes-blockcart">
											<div class="dishes-blockcart__body">
												<div class="dishes-blockcart__column">
													<?php
														foreach ($_SESSION["cart"] as $good) { ?>
															<div class="dishes-blockcart__item">
																<div class="dishes-blockcart__row">
																	<div class="dishes-blockcart__img">
																		<img src="img/backend/goods/<?php echo $good['id']; ?>/header.png" alt="blin">
																	</div>
																	<div class="dishes-blockcart__count-name">
																		<div class="dishes-blockcart__name"><?php echo $good["name"]; ?></div>
																		<div class="dishes-blockcart__count"><?php echo $good["count"]; ?></div>
																	</div>
																	<div class="dishes-blockcart__del-price">
																		<div class="dishes-blockcart__del" onclick="removeFromCart(<?php echo $good["id"]; ?>)"></div>
																		<div class="dishes-blockcart__price"><?php echo $good["price"]; ?></div>
																	</div>
																</div>
															</div>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="block-cart__topay">
											<div class="block-cart__topay-info">К оплате <span><?php echo $totalprice; ?></span> грн</div>
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
							<?php }else{ ?>
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
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="white-line"></div>
</header>