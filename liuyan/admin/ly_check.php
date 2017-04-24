<?php
	require_once("../include/global.php");
	if($_SESSION["admin"]=="")
	{
 	echo "<script language=javascript>alert('ÇëÖØÐÂµÇÂ½£¡');window.location='login.php'</script>";
	}
?>