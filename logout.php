<?php
	setcookie('isLogin', 'true', time()-3600);
	header('location:index.php');
?>