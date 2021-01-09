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
							<div class="navi-cart__cart navi-cart__cart--active ">
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
							<div class="navi-cart__done">
								<span>Готово</span>
							</div>
						</div>
					</div>
					<div class="grey__full-line"></div>
					<div class="cart__tabs tabs-cart">
						<nav class="tabs-cart__items">
							<a href="#tabs-cart__delivery" class="tabs-cart__item">Доставка</a>
							<a href="#tabs-cart__pickup" class="tabs-cart__item">Самовывоз</a>
						</nav>
						<div class="grey__line"></div>
						<div class="tabs-cart__body">
							<div id="tabs-cart__delivery" class="tabs-cart__block">
								<?php 
									$row = array('phone'=>'','street'=>'','house'=>'','appartment'=>'','entrance'=>'','doorcode'=>'','floor'=>'');
									if(isset($_SESSION['user']) && !empty($_SESSION["user"])){
										$sql = "SELECT * FROM users WHERE email='".$_SESSION["user"]['email']."'";
										$result = $GLOBALS["mysql"]->query($sql);
										if($result){
											$row = $result->fetch_assoc();
										}else{
											throw new Exception($GLOBALS["mysql"]->error);
										}
									}
								?>
								<div class="delivery-cart">
									<div class="delivery-cart__street">
										<input placeholder="Улица" type="text" name="delivery-street" id="delivery-cart__street" value="<?php echo $row['street'];?>">
									</div>
									<div class="delivery-cart__home">
										<div class="delivery-cart__home-item">
											<input type="text" placeholder="Дом" name="house-number"
												class="delivery-cart__home-small-field" id="delivery-house-number" value="<?php echo $row['house'];?>">
										</div>
										<div class="delivery-cart__home-item">
											<input type="text" placeholder="Квартира" name="apartment-number"
												class="delivery-cart__home-small-field" id="delivery-apartment-number" value="<?php echo $row['appartment'];?>">
										</div>
										<div class="delivery-cart__home-item">
											<input type="text" placeholder="Подъезд" name="entrance-number"
												class="delivery-cart__home-small-field" id="delivery-entrance-number" value="<?php echo $row['entrance'];?>">
											<div class="delivery-cart__home-prompt">Первый</div>
										</div>
										<div class="delivery-cart__home-item">
											<input type="text" placeholder="Код двери" name="door-code"
												class="delivery-cart__home-small-field" id="delivery-door-code" value="<?php echo $row['doorcode'];?>">
											<div class="delivery-cart__home-prompt">Домофон</div>
										</div>
										<div class="delivery-cart__home-item">
											<input type="text" placeholder="Этаж" name="floor"
												class="delivery-cart__home-small-field" id="delivery-floor" value="<?php echo $row['floor'];?>">
											<div class="delivery-cart__home-prompt">Первый</div>
										</div>
									</div>
									<div class="delivery-cart__address">
										<input placeholder="Место адреса" type="text" name="delivery-address"
											id="delivery-cart__address">
										<div class="delivery-cart__address-prompt">Дом / Работа</div>
									</div>
									<div class="delivery-cart__phonenumber">
										<input placeholder="Номер телефона" type="tel" name="delivery-cart__phonenumber"
											id="delivery-cart__phonenumber" value="<?php echo $row['phone'];?>">
									</div>
									<div class="delivery-cart__comments">
										<textarea class="delivery-cart__comment-textarea" placeholder="Коментарий к адресу"
											name="delivery-cart__comment" id="delivery-cart__comment-textarea"></textarea>
									</div>
								</div>
							</div>
							<div id="tabs-cart__pickup" class="tabs-cart__block"></div>
						</div>
					</div>
					<a href="/" onclick="confirm_order();" class="tabs-cart__confirm-btn btn1">Подтвердить</a>
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