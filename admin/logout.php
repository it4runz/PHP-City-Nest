<?php
	//session is start
	session_start();

	//session blank
	$_SESSION['adlogin']="";

	//session destroy
	session_destroy();

	//re-locate your page.
	header("Location:login.php");

?>