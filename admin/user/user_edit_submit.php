<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
	include_once '../../common/conn.php';
	$id=$_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql = "update user set "
				."username='".mysql_real_escape_string($username)."',"
				."password='".mysql_real_escape_string($password)."'"
				." where id=".mysql_real_escape_string($id);
	$result = mysql_query($sql);
	mysql_close($link);
	echo "<script>alert('更新成功! ');window.location='user_list.php';</script>";

?>
</head>
</html>