<?php
	if(!isset($_POST["amount"]) || empty($_POST["amount"])){
		http_response_code ( 400 );
		exit;
	}
	session_start();
	$_SESSION["cultery"] = $_POST["amount"];
	echo "ok";
?>