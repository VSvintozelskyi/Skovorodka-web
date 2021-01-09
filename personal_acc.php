<?php
	include_once "./mysql.php";
	session_start();
	if(!isset($_SESSION["user"])){
		header('Location: http://'.URL.'/index.php');
		exit;
	}
?>

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
		<?php include "header.php"; ?>
		<div class="content">
			<div class="account">
				<div class="container">
					<h1 class="account__title">Личный кабинет</h1>
					<div class="account__info info-account">
						<div class="info-account__column">
							<?php 
								$sql = "SELECT * FROM users WHERE email='".$_SESSION["user"]["email"]."'";
								$result = $GLOBALS["mysql"]->query($sql);
								if(!$result){
									http_response_code ( 500 );
									exit;
								}
								$row = $result->fetch_assoc();
							?>
							<div class="info-account__row">
								<p class="info-account__subtitle">Имя:</p>
								<p class="info-account__subtitle"><?php echo $row["name"];?></p>
							</div>
							<div class="info-account__row">
								<p class="info-account__subtitle">Номер телефона:</p>
								<p class="info-account__subtitle"><?php echo $row["phone"];?></p>
							</div>
							<div class="info-account__row">
								<p class="info-account__subtitle">День рождения:</p>
								<p class="info-account__subtitle"><?php echo $row["birthday"];?></p>
							</div>
							<div class="info-account__row">
								<p class="info-account__subtitle">e-mail:</p>
								<p class="info-account__subtitle"><?php echo $row["email"];?></p>
							</div>
							<div class="info-account__row">
								<p class="info-account__subtitle">Улица:</p>
								<p class="info-account__subtitle"><?php echo $row["email"];?></p>
							</div>
							<div class="info-account__row">
								<p class="info-account__subtitle">Адрес:</p>
								<p class="info-account__subtitle">Улица: <?php echo $row["street"];?> </p>&nbsp;
								<p class="info-account__subtitle">Дом: <?php echo $row["house"];?> </p>&nbsp;
								<p class="info-account__subtitle">Квартира: <?php echo $row["appartment"];?> </p>&nbsp;
								<p class="info-account__subtitle">Подъезд: <?php echo $row["entrance"];?> </p>&nbsp;
								<p class="info-account__subtitle">Код двери: <?php echo $row["doorcode"];?> </p>&nbsp;
								<p class="info-account__subtitle">Этаж: <?php echo $row["floor"];?> </p>&nbsp;
							</div>
						</div>
					</div>
					<div class="account__logoutbtn">
						<input type="button" value="ВЫЙТИ ИЗ ЛИЧНОГО КАБИНЕТА" onclick="logout()">
					</div>
				</div>
			</div>
		</div>
		<?php include "footer.php" ?>
	</div>
	<?php include "popups.php" ?>
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
	<script src="js/back.js"></script>
</body>

</html>