<?php
	include_once "mysql.php";
	
	$goodid = ($_POST['goodid']);
	if (empty($goodid)){
		http_response_code ( 400 );
		exit;
	}

	session_start();
	if(!isset($_SESSION["cart"]))
		exit;

	foreach ($_SESSION["cart"] as $key => $good) {
		if ($good["id"] == $goodid){
			unset($_SESSION["cart"][$key]);
			break;
		}
	}
	echo "ok";
?>