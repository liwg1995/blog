<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
	include_once '../../common/conn.php';
	
	$name=$_POST['name'];
	$sql = "insert into news_type(name) values('"
				.mysql_real_escape_string($name)
			."')";
	$result = mysql_query($sql);
	mysql_close($link);
	echo "<script>alert('增加成功! ');window.location='news_type_list.php';</script>";

?>
</head>
</html>