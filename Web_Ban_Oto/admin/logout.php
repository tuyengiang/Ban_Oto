<?php 
	require_once('../inc/ketnoi.php');

	if(isset($_SESSION["email"])){
		unset($_SESSION["email"]);
		header("location:../index.php");
	}
 ?>