<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$db = "skovorodka";

// Create connection
$GLOBALS['mysql'] = new mysqli($servername, $username, $password,$db);
$GLOBALS['category_names'] = array("Основные блюда","Супы","Салаты","Лапша","Блины","Гарниры","Напитки","Десерты");
$GLOBALS['category_codes'] = array("main-dishes","soups","salads","noodles","pancakes","side-dishes","drinks","desserts");
$GLOBALS['category_amount'] = 8;
// Check connection
if ($GLOBALS['mysql']->connect_error) {
  	die("Connection failed: " . $GLOBALS['mysql']->connect_error);
}

define('URL', 'localhost');

// if(isset($_POST['auth_name']) && isset($_POST['auth_pass'])){
// 	$sql = "SELECT * FROM users WHERE email=".$_POST['auth_name']." AND password=" . $_POST['auth_pass'];

// 	$result = $GLOBALS["mysql"]->query($sql);
// 	if ($result->num_rows > 0) {
// 		$row = $result->fetch_assoc();
// 		$GLOBALS['user'] = $row;
// 	}else{
// 		// incorrect pass
// 	}
// }
// session_destroy () ;
?>