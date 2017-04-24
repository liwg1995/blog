<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
	include_once '../../common/conn.php';
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql = "insert into user(username, password) values('"
				.mysql_real_escape_string($username)."','"
				.mysql_real_escape_string($password)
			."')";
	$result = mysql_query($sql);
	mysql_close($link);
	echo "<script>alert('新增成功! ');window.location='user_list.php';</script>";

?>
</head>
</html>