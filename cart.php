<?php
include_once "./mysql.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />
	<link rel="stylesheet" href="css/style.css">
	<title>Skovorodka</title>
</head>

<body>
	<div class="wrapper">
		<div class="cart content cart-content">
			<div class="container">
				<div class="cart__header">
					<div class="cart__logo">
						<a href="index.php"><img src="img/header/cart-logo.png" alt="Корзина"></a>
					</div>
					<div class="cart__logo-sm">
						<a href="index.php"><img src="img/header/cart-logo-sm.png" alt="Корзина"></a>
					</div>
					<?php if(isset($_SESSION["user"])){ ?>
							<div class="cart__profile">
								<div id="cart__user" class="cart__user">
									<span><?php echo $_SESSION["user"]['login']?></span>
									<ul class="top-header__profile-dropdown cart__profile-dropdown">
										<li><a href="##" class="top-header__user-icon"><?php echo $_SESSION["user"]['login']?></a></li>
										<li><a href="personal_acc.php" class="top-header__profile-icon">Мой профиль</a></li>
										<li><a onclick="logout(true, 'index.php')" class="top-header__logout-icon">Выйти</a></li>
									</ul>
								</div>
							</div>
					<?php } ?>
				</div>
			</div>
			<div class="cart__container">
				<div class="cart__content">
					<div class="grey__full-line"></div>
					<div class="cart__navi navi-cart">
						<div class="navi-cart__row">
							<div class="navi-cart__cart navi-cart__cart--active">
								<span>Корзина</span>
							</div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__delivery">
								<span>Доставка</span>
							</div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__done">
								<span>Готово</span>
							</div>
						</div>
					</div>
					<div class="grey__full-line"></div>
					<div class="cart__dishes dishes-cart">
						<?php
							foreach ($_SESSION["cart"] as $good) { ?>
								<div class="dishes-cart__item">
									<div class="dishes-cart__row">
										<div class="dishes-cart__img">
											<img src="img/backend/goods/<?php echo $good['id'];?>/cart.png" alt="pasta">
										</div>
										<div class="dishes-cart__dish dish-cart">
											<div class="dish-cart__title"><?php echo $good["name"];?></div>
											<div class="dish-cart__description"><?php echo $good["description"];?></div>
										</div>
										<div class="dishes-cart__change">
											<input href="#selection-popup" class="dishes-cart__change-btn popup-link btn2" type="button" value="Изменить" onclick='updateselectionpopup(<?php echo '"' . htmlspecialchars($good["name"],ENT_QUOTES) . '", ' . $good["DBamount"] . ',"' . htmlspecialchars($good["description"],ENT_QUOTES) . '", ' . $good["price"] .",".$good["id"] . "," . $good['count']?>)'>
										</div>
										
										<div class="dishes-cart__price1"><?php echo $good["cost"];?> грн</div>
										<div class="dishes-cart__count"><span><?php echo $good["count"];?> шт</span></div>
										<div class="dishes-cart__price-n"><?php echo $good["price"];?> грн</div>
										<div class="dishes-cart__delete-btn" onclick="removeFromCart(<?php echo $good["id"]; ?>)">
										</div>
									</div>
								</div>
						<?php } ?>
					</div>
					<div class="cart__cutlery cutlery-cart">
						<div class="cutlery-cart__title">Приборы</div>
						<div class="cutlery-cart__items">
							<?php
								$sql = "SELECT * FROM cutlery";

								$result = $GLOBALS["mysql"]->query($sql);
								while($row = $result->fetch_assoc()) { ?>
									<div class="cutlery-cart__item">
										<div class="cutlery-cart__row">
											<div class="cutlery-cart__img">
												<img src="img/cart/cutlery.png" alt="cutlery">
											</div>
											<div class="cutlery-cart__subtitle"><?php echo $row["name"];?></div>
											<div class="cutlery-cart__change"></div>
											<div class="cutlery-cart__price1"><span id="backend-cutlery-cart-pr1"><?php echo $row["price"];?></span> грн</div>
											<div class="cutlery-cart__count">
												<span class="cutlery-cart__count-counter">
													<button class="cutlery-cart__count-minus">-</button>
													<input id="cutlery-cart__standart" type="text" value="2" disabled>
													<button class="cutlery-cart__count-plus">+</button>
												</span>
											</div>
											<div class="cutlery-cart__price-n"><span id="backend-cutlery-cart-pr2">40</span> грн</div>
										</div>
									</div>
							<?php } ?>
						</div>
					</div>
					<div class="cart__recommendation recommendation-cart">
						<div class="recommendation-cart__title">Наши рекомендации</div>
						<div class="recommendation-cart__slider slider-cart">
							<?php 
								$sql = "SELECT * FROM goods WHERE isrecommendation=1";
								$result = $GLOBALS["mysql"]->query($sql);
								while($row = $result->fetch_assoc()) { 
									if(isset($_SESSION["cart"]) && !empty(isset($_SESSION["cart"])))
										foreach ($_SESSION["cart"] as $good) {
											if($good["id"] == $row["good_id"])
												continue 2;
									}?>
									<div class="slider-cart__item">
										<img class="slider-cart__foto" src="img/backend/goods/<?php echo $row['good_id'];?>/cart.png">
										<div class="slider-cart__info">
											<div class="slider-cart__title"><?php echo $row['name']; ?></div>
											<input href="#selection-popup" class="slider-cart__price-btn popup-link btn3" type="button" value="<?php echo $row['price']; ?> грн" onclick='updateselectionpopup(<?php echo '"' . htmlspecialchars($row["name"],ENT_QUOTES) . '", ' . $row["amount"] . ',"' . htmlspecialchars($row["description"],ENT_QUOTES) . '", ' . $row["price"] .",".$row["good_id"] . ", 2" ?>);
													'>
										</div>
									</div>
							<?php } ?>
						</div>
					</div>
					<div class="cart__sauces sauces-cart">
						<div class="sauces-cart__title">Соусы</div>
						<div class="sauces-cart__body">
							<div class="sauces-cart__row">
								<div class="sauces-cart__column">
									<div class="sauces-cart__item">
										<div class="sauces-cart__foto">
											<img src="img/cart/sauce.png" alt="sauce">
										</div>
										<div class="sauces-cart__subtitle">Укропный</div>
										<input class="sauces-cart__price-btn btn3" type="button" value="20 грн">
									</div>
								</div>
								<div class="sauces-cart__column">
									<div class="sauces-cart__item">
										<div class="sauces-cart__foto">
											<img src="img/cart/sauce.png" alt="sauce">
										</div>
										<div class="sauces-cart__subtitle">Укропный</div>
										<input class="sauces-cart__price-btn btn3" type="button" value="20 грн">
									</div>
								</div>
								<div class="sauces-cart__column">
									<div class="sauces-cart__item">
										<div class="sauces-cart__foto">
											<img src="img/cart/sauce.png" alt="sauce">
										</div>
										<div class="sauces-cart__subtitle">Укропный</div>
										<input class="sauces-cart__price-btn btn3" type="button" value="20 грн">
									</div>
								</div>
								<div class="sauces-cart__column">
									<div class="sauces-cart__item">
										<div class="sauces-cart__foto">
											<img src="img/cart/sauce.png" alt="sauce">
										</div>
										<div class="sauces-cart__subtitle">Укропный</div>
										<input class="sauces-cart__price-btn btn3" type="button" value="20 грн">
									</div>
								</div>
								<div class="sauces-cart__column">
									<div class="sauces-cart__item">
										<div class="sauces-cart__foto">
											<img src="img/cart/sauce.png" alt="sauce">
										</div>
										<div class="sauces-cart__subtitle">Укропный</div>
										<input class="sauces-cart__price-btn btn3" type="button" value="20 грн">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="cart__promo promo-cart">
						<div class="promo-cart__title">Промокод</div>
						<div class="promo-cart__fields">
							<input class="promo-cart__input" placeholder="Ввести промокод" type="text">
							<input class="promo-cart__btn btn3" type="button" value="Применить промокод">
						</div>
					</div>
					<div class="cart__order-price">Сумма заказа: <span>570 грн</span></div>
					<div class="cart__btns">
						<a href="/" onclick="checkout();" class="cart__checkout-btn btn1">Оформить заказ</a>
						<a href="index.php" class="cart__cnt-shopping btn3">Продолжить покупки</a>
					</div>
				</div>
			</div>
		</div>
		<?php
		include "./footer.php"
		?>
	</div>
	<?php include "popups.php" ?>

	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="js/script.js"></script>
<script src="js/back.js"></script>
</body>

</html>