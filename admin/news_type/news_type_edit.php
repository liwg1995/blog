<?php 
	include_once '../../common/conn.php';
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$sql = "select * from news_type where id=$id";
		$result = mysql_query($sql);
		while ($rs = mysql_fetch_object($result)) {
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
<script type="text/javascript" src="../../resources/ckeditor/ckeditor.js"></script>

<style type="text/css">
	body {
		background-image:none;
	}
</style>
</head>
<body>
	<form id="form1" name="form1" method="post" action="news_type_edit_submit.php">
		<input type="hidden" name="id" value="<?php echo $rs->id;?>" />
		<p>
			<label>标题</label>
		    <input class="text-input small-input" type="text" name="name" value="<?php echo $rs->name; ?>" />
		</p>
		<p>
			<input name="submit" type="submit" value="提交" class="button" />
			<input type="button" name="back" value="返回" class="button" onclick="history.back();" />
		</p>
	</form>
</body>
</html>
<?php 
		}
	}
	mysql_close($link);
?>