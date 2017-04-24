<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	include_once '../common/conn.php';
	$result = mysql_query("select * from admin where username='".mysql_real_escape_string($username)."' and password='".mysql_real_escape_string($password)."'");
	if ($rs = mysql_fetch_object($result)) {
		session_start();
		$_SESSION["admin"] =  $rs->username;
		echo "<script>window.location='index.php';</script>";
		return;
	}
	echo "<script>alert('用户名或密码错误! ');window.location='login.html';</script>";
	
?>
</head>
</html>