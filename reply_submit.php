<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>注册</title>
<link href="resources/css/default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<?php include_once 'common/header.php';?>
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title">评论</h2>
						<div class="entry">
						<?php
							$content = $_POST['reply'];
							$news_id = $_POST['news_id'];
							$user_id = $_SESSION['log_id'];
							date_default_timezone_set('Asia/Shanghai');
							$reply_time = date("Y-m-d H:i:s");
							$sql = "insert into reply(content, news_id, user_id, reply_time) values('"
										.mysql_real_escape_string($content)."',"
										.mysql_real_escape_string($news_id).","
										.mysql_real_escape_string($user_id).",'"
										.mysql_real_escape_string($reply_time)
									."')";
							$result = mysql_query($sql);
							echo "<script>alert('评论成功！');window.location='".$_POST['url']."';</script>";
						?>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<?php include_once 'common/sidebar.php';?>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<?php include_once 'common/footer.php';?>
</div>
<!-- end #footer -->
</body>
</html>
