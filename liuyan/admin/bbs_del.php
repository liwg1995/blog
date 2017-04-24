<?php
	require_once('ly_check.php');
	$id=$_GET["id"];
	$pageno=$_GET["pageno"];
	$sql="delete from reply where leaveid=$id";
	mysql_query($sql);
	$sql="delete from leavewords where id=$id";
	mysql_query($sql);
	echo "<script language=javascript>alert('É¾³ý³É¹¦£¡');window.location='bbs_admin.php?pageno=$pageno'</script>";
?>
