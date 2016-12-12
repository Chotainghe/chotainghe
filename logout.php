<?php session_start();
	setcookie('isLogin', 'true', time()-3600);
	session_destroy();
	header('location:login.php');
?>