<?php
$conn = mysqli_connect("localhost","root","","pghouse");
//If session not start then start the session
	//$_SESSION['variable_Name']

	if(!isset($_SESSION['adlogin'])) 
	{ 
        	session_start(); 
    	} 
?>