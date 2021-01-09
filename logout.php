<?php
	session_start();
 
	// Destroy the session.
	if(isset($_SESSION["user"]))
		unset($_SESSION["user"]);
	echo "ok";
?>