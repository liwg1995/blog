<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
	include_once '../../common/conn.php';
	$id=$_POST['id'];
	$name=$_POST['name'];
	$sql = "update news_type set "
				."name='".mysql_real_escape_string($name)."'"
				." where id=".mysql_real_escape_string($id);
	$result = mysql_query($sql);
	mysql_close($link);
	echo "<script>alert('更新成功! ');window.location='news_type_list.php';</script>";

?>
</head>
</html>