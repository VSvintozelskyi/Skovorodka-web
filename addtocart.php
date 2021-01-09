<?php
	include_once "mysql.php";
	
	$goodid = ($_POST['goodid']);
	$amount = ($_POST['amount']);
	if (empty($goodid) || empty($amount)){
		http_response_code ( 400 );
		exit;
	}

	$sql = "SELECT * FROM goods WHERE good_id='".$goodid."'"; 	
	$result = $GLOBALS["mysql"]->query($sql);
	if(! $result){
		http_response_code ( 500 );
		exit;
	}
	if (!preg_match("/^[0-9]*$/",$amount)) {
	  	http_response_code ( 400 );
	  	exit;
	}
	if ($result->num_rows != 1) {
		http_response_code ( 400 );
		exit;
	}

	$row = $result->fetch_assoc();
	session_start();
	if(!isset($_SESSION["cart"]))
		$_SESSION["cart"] = array();
	$newgood = array('name' => $row["name"], 'count'=>$amount, 'price'=>$amount * $row["price"], "id"=>$row["good_id"], "cost"=>$row["price"], "description"=>$row["description"], "DBamount"=>$row['amount']);
	foreach ($_SESSION["cart"] as $key => $good) {
		if($good["id"] == $newgood["id"]){
			$_SESSION["cart"][$key] = $newgood;
			echo "ok";
			exit;
		}
	}
	$_SESSION["cart"][] = $newgood;
	echo "ok";
?>