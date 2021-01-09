<?php
	include_once "mysql.php";
	$login = trim($_POST['login']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$pass = ($_POST['pass']);
	$pass2 = ($_POST['pass2']);

	if (empty($login)){
		echo "Login is empty";
		exit;
	}

	if (strlen($login) < 3){
		echo "Login must have atleast 3 characters.";
		exit;
	}
	if (!preg_match("/^[a-zA-Z0-9 ]*$/",$login)) {
	  	echo "Only letters, numbers and white space allowed for login";
	  	exit;
	}
	if (empty($email)){
		echo "Email is empty";
		exit;
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  	echo "Invalid email format";
	  	exit;
	}
	if (empty($phone)){
		echo "Phone is empty";
		exit;
	}
	if (!preg_match("/^\+?[0-9]{10,12}$/",$phone)) {
	  	echo "Invalid phone format";
	  	exit;
	}
	if (empty($pass)){
		echo "Password is empty";
		exit;
	}
	if (empty($pass2)){
		echo "Passwords did not match";
		exit;
	}

	$email =  mysqli_escape_string($GLOBALS["mysql"],$email);
	$sql = "SELECT * FROM users WHERE email='".$email."'"; 	
	$result = $GLOBALS["mysql"]->query($sql);
	if(! $result){
		echo $GLOBALS["mysql"]->error;
		echo $sql;
		exit;
	}


	
	if ($result->num_rows > 0) {
		echo "A user with such email already have account. Try to login";
		exit;
	}
				
	if(strlen($pass) < 6){
		echo "Password must have atleast 6 characters.";
		exit;
	}

	if($pass != $pass2){
		echo "Passwords did not match";
		exit;
	}

	if(empty($_POST["birthday"]))
		$birthday = 'NULL';
	else
		$birthday = "'". mysqli_escape_string($GLOBALS["mysql"],$_POST["birthday"])."'";

	$adress =  mysqli_escape_string($GLOBALS["mysql"],$_POST["adress"]);
	$house =  mysqli_escape_string($GLOBALS["mysql"],$_POST["house"]);
	$apartment =  mysqli_escape_string($GLOBALS["mysql"],$_POST["apartment"]);
	$entrance =  mysqli_escape_string($GLOBALS["mysql"],$_POST["entrance"]);
	$code =  mysqli_escape_string($GLOBALS["mysql"],$_POST["code"]);
	$floor =  mysqli_escape_string($GLOBALS["mysql"],$_POST["floor"]);


	$sql = "INSERT INTO users (name, phone, email, password, birthday, street, house, appartment, entrance, doorcode, floor) VALUES ('".$login."','".$phone."','".$email."','".password_hash($pass, PASSWORD_DEFAULT)."',". $birthday.",'". $adress ."','". $house ."','". $apartment ."','". $entrance ."','". $code ."','". $floor."')";
	$result = $GLOBALS["mysql"]->query($sql);
	if($result){
		echo "ok";
		session_start();
		$_SESSION["user"] = array('login' => $login, 'email' => $email);
	}else{
		echo $GLOBALS["mysql"]->error;
		echo $sql;
	}

	// echo "ok";
?>