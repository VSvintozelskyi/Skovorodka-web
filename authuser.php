<?php
	include_once "mysql.php";
	$email = trim($_POST['email']);
	$pass = ($_POST['pass']);

	if (empty($email)){
		echo "Email is empty";
		exit;
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  	echo "Invalid email format";
	  	exit;
	}
	if (empty($pass)){
		echo "Password is empty";
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

	if ($result->num_rows != 1) {
		echo "Invalid credentials";
		exit;
	}

	$row = $result->fetch_assoc();
	
	if(password_verify($pass, $row['password'])){
		echo "ok";
		session_start();
		$_SESSION["user"] = array('login' => $row["name"], 'email' => $email);
	}else{
		echo "Invalid credentials";
		exit;
	}

?>