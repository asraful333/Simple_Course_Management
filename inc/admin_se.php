<?php 
	session_start();
	if(isset($_SESSION["ex"])){
		if($_SESSION["ex"]=="iamin"){
			header('location:registration.php');
		}
	}
	if(!isset($_SESSION["admin"]))
		header('location:index.php');
?>