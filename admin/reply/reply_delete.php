<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
	include_once '../../common/conn.php';
	$id=$_GET['id'];
	$sql = "delete from reply where id=".mysql_real_escape_string($id);
	$result = mysql_query($sql);
	mysql_close($link);
	echo "<script>window.location='reply_list.php';</script>";
?>
</head>
</html>