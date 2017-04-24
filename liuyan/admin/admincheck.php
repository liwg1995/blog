<?php
	ob_start();
	session_start();
	if($_SESSION["admin"]=="")
	{
		header("location:../admin/login.php");
	}
?>
