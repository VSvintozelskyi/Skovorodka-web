<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$db = "skovorodka";

// Create connection
$GLOBALS['mysql'] = new mysqli($servername, $username, $password,$db);
$GLOBALS['category_names'] = array("Основные блюда","Супы","Салаты","Лапша","Блины","Гарниры","Напитки","Десерты");
$GLOBALS['category_amount'] = 8;
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>