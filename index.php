
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
			<div class="container">
				<div class="slider">
					<div class="slider__item"><img src="img/slider/doster.jpg" alt=""></div>
					<div class="slider__item"><img src="img/slider/doster.jpg" alt=""></div>
					<div class="slider__item"><img src="img/slider/doster.jpg" alt=""></div>
					<div class="slider__item"><img src="img/slider/doster.jpg" alt=""></div>
					<div class="slider__item"><img src="img/slider/doster.jpg" alt=""></div>
				</div>
			</div>

			<?php
			for ($category = 1; $category<$GLOBALS['category_amount']+1; $category++){
				?>

				<div class="menu">
					<div class="container">
						<div id="<?php echo $GLOBALS['category_codes'][$category -1]?>" class="menu__row">
							<div class="menu__title"><?php echo $GLOBALS['category_names'][$category-1]?></div>
							<div class="menu__items">
								<?php
								$sql = "SELECT * FROM goods WHERE group_id=".$category;

								$result = $GLOBALS["mysql"]->query($sql);
								while($row = $result->fetch_assoc()) { ?>
									<div class="menu__col">
										<div class="menu__item item-menu new">
											<img src="img/backend/goods/<?php echo $row['good_id']; ?>/content_menu.png" alt="pasta" class="item-menu__dish">
											<div class="item-menu__description">
												<div class="item-menu__title"><?php echo $row["name"] ?></div>
												<div class="item-menu__recipe"><?php echo  $row["description"] ?></div>
												<div class="item-menu__pricerow">
													<div class="item-menu__price"><?php echo $row["price"] ?> грн</div>
													<?php 
														$sel_amount = 2;
														if(isset($_SESSION["cart"]) && !empty(isset($_SESSION["cart"])))
															foreach ($_SESSION["cart"] as $good) {
																if($good["id"] == $row["good_id"])
																	$sel_amount = $good["count"];
															}
													?>
													<a href="#selection-popup" class="item-menu__btn popup-link btn1" onclick='updateselectionpopup(<?php echo '"' . htmlspecialchars($row["name"],ENT_QUOTES) . '", ' . $row["amount"] . ',"' . htmlspecialchars($row["description"],ENT_QUOTES) . '", ' . $row["price"] .",".$row["good_id"] . "," . $sel_amount?>);
													'>ВЫБРАТЬ</a>
												</div>
											</div>
										</div>
										<?php
										if( $row["isNew"] or ($row['discount'] != 0)) { ?>
											<div class="item-menu__flags">
												<div class="item-menu__flags-wrapper">
													<?php
													if ($row['discount'] != 0){ ?>
														<div class="item-menu__flag item-menu__flag-discount"><span>-<?php echo $row["discount"] ?></span>%</div>
													<?php } 
													if ($row['isNew']){ ?>
														<div class="item-menu__flag item-menu__flag-new">NEW</div>
													<?php } ?>
												</div>
											</div>
										<?php }
										if ($row["isBestPrice"]) { ?>
											<div class="item-menu__bestprice-box">
												<div class="item-menu__bestprice-wrapper">
													<span class="item-menu__bestprice">лучшая цена</span>
												</div>
											</div>
										<?php } ?>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>

			<?php } ?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
integrity="sha512-rCjfoab9CVKOH/w/T6GbBxnAH5Azhy4+q1EXW5XEURefHbIkRbQ++ZR+GBClo3/d3q583X/gO4FKmOFuhkKrdA=="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jScrollPane/2.2.2/script/jquery.jscrollpane.min.js"
integrity="sha512-EqofP+sBEn/OWcyAINAUnewpwC0e9zc0GvyiVeE3qeHYxqtdCcNocVBUiZhGWbPFWGTWxfJ60CcOK6HQ6G7uiw=="
crossorigin="anonymous"></script>
<script src="js/back.js"></script>
</body>

</html>