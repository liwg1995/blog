<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>个人博客网站</title>
<link href="resources/css/default.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="imag/webico.ico" mce_href="imag/webico.ico" type="image/x-icon">
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
</head>


<body>
<div id="wrapper">
	<?php include_once 'common/header.php';?>
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
				<?php
					$sql = "select t.* from news t left join news_type t2 on t.news_type_id=t2.id order by t.publish_time desc limit 0, 3";
					$result = mysql_query($sql);
					while ($rs = mysql_fetch_object($result)) {
				?>
					<div class="post">
						<h3 class="title"><a href="news_detail.php?id=<?php echo $rs->id;?>"><?php echo $rs->title;?></a></h3>
						<div class="entry">
							<?php
								echo substr(str_replace(array(" ", "\n", "\r"), "", strip_tags($rs->content)), 0, 1000);
							?>...
						</div>
						<div class="byline">
							<p class="meta"><?php echo $rs->publish_time;?></p>
							<p class="links"><a href="news_detail.php?id=<?php echo $rs->id;?>">阅读全文</a></p>
						</div>
					</div>
				<?php
					}
				?>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<?php include_once 'common/sidebar.php';?>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	
	<?php include_once 'common/footer.php';?><br>


</div>
<!-- end #footer -->



</body>
</html>
