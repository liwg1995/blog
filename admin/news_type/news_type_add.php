<?php 
	include_once '../../common/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<link rel="stylesheet" href="../../resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../../resources/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../../resources/css/invalid.css" type="text/css" media="screen" />
<script type="text/javascript" src="../../resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../../resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="../../resources/scripts/facebox.js"></script>
<script type="text/javascript" src="../../resources/scripts/iframe-auto.js" defer="defer"></script>

<style type="text/css">
	body {
		background-image:none;
	}
</style>
</head>
<body>
	<form id="form1" name="form1" method="post" action="news_type_add_submit.php">
		<p>
			<label>类型</label>
		    <input class="text-input small-input" type="text"  name="name" />
		</p>
		<p>
			<input name="submit" type="submit" value="提交" class="button" />
			<input type="button" name="back" value="返回" class="button" onclick="history.back();" />
		</p>
	</form>
</body>
</html>