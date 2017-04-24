<?php 
	include_once '../../common/conn.php';
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$sql = "select * from news where id=$id";
		$result2 = mysql_query($sql);
		while ($rs2 = mysql_fetch_object($result2)) {
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
<script type="text/javascript" src="../../resources/datePicker/WdatePicker.js"></script>

<style type="text/css">
	body {
		background-image:none;
	}
</style>
</head>
<body>
	<form id="form1" name="form1" method="post" action="news_edit_submit.php">
		<input type="hidden" name="id" value="<?php echo $rs2->id;?>" />
		<p>
			<label>标题</label>
		    <input class="text-input small-input" type="text" name="title" value="<?php echo $rs2->title; ?>" />
		</p>
		<p>
			<label>发布时间</label>
		    <input class="text-input small-input" type="text"  name="publish_time" value="<?php echo $rs2->publish_time; ?>" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" />
		</p>
		<p>
			<label>类别</label>
			<select name="news_type_id" class="small-input">
			<?php 
				$sql = sprintf("select * from news_type");
				$result = mysql_query($sql);
				while ($rs = mysql_fetch_object($result)) {
					if ($rs2->news_type_id == $rs->id)
						echo "<option value=\"".$rs->id."\" selected=\"selected\">".$rs->name."</option>";
					else 
						echo "<option value=\"".$rs->id."\">".$rs->name."</option>";
				}
			?>
			</select>
		</p>
		<p>
			<label>内容</label>
		    <textarea name="content" class="ckeditor"><?php echo $rs2->content; ?></textarea>    
			
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