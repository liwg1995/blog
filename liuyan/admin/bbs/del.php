<?php
require_once('../admincheck.php');
	require("../mrconn.php");
	$id=$_GET["id"];
	$pageno=$_GET["pageno"];
	$sql="delete from reply where leaveid=$id";
	mysql_query($sql);
	$sql="delete from leavewords where id=$id";
	mysql_query($sql);
	header("location:admin.php?pageno=$pageno");
?>
