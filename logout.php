<?php
	//session is start
	session_start();

	//session blank
	$_SESSION['login']="";

	//session destroy
	session_destroy();

	//re-locate your page.
	header("Location:index.php");

?>