<?php
	require_once('ly_check.php');
	$id=$_GET["id"];
	$pageno=$_GET["pageno"];
	$sql="update leavewords set is_audit=1 where id=$id";
	mysql_query($sql);
	echo "<script language=javascript>alert('…Û∫À≥…π¶£°');window.location='bbs_admin.php?pageno=$pageno'</script>";
?>
