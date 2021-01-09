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
		<div class="cart content">
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
							<div class="navi-cart__delivery navi-cart__cart--active">
								<span>Доставка</span>
							</div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__dot"></div>
							<div class="navi-cart__done navi-cart__cart--active">
								<span>Готово</span>
							</div>
						</div>
					</div>
					<div class="grey__full-line"></div>
					<div class="cart__final">Ваш заказ отправлен в обработку</div>
					<input class="cart__spy-btn btn1" type="button" value="Отследить заказ">
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