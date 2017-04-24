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
<script type="text/javascript" src="dashang/js/jquery-1.8.3.min.js"></script>




<script type="text/javascript">
function check() {
	if ($('#reply').val() == '') {
		alert('请填写评论内容！');
		return false;
	}
	return true;
}
</script>
</head>
<body>







<div id="wrapper">
	<?php include_once 'common/header.php';?>
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
				<?php
					if (!isset($_REQUEST['id'])) {
						echo "<script>alert('该博客不存在! ');window.location='index.php';</script>";
						return;
					}
					$id = $_REQUEST['id'];
					$sql = "select * from news where id=$id";
					$result = mysql_query($sql);
					if ($rs = mysql_fetch_object($result)) {
				?>
					<div class="post">
						<h3 class="title"><a href="news_detail.php?id=<?php echo $rs->id;?>"><?php echo $rs->title;?></a></h3>
						<div class="byline">
							<p class="meta"><?php echo $rs->publish_time;?></p>


						</div>

						<div class="entry">


							<?php
								echo $rs->content;
							?>
						</div>
					</div>







					<div class="post">
						<h4 class="title">评论</h4>
					<?php
						$sql = "select t.*, t2.username from reply t left join `user` t2 on t.user_id=t2.id where t.news_id=$id";
							//echo $sql;
						$result = mysql_query($sql);
						while ($rs = mysql_fetch_object($result)) {
					?>





							<div  class="entry">
								<?php echo $rs->content;?>
							</div>
							<div class="byline">
								<p class="meta"><?php echo $rs->reply_time;?></p>
								<p class="links">评论人：<?php echo $rs->username;?></p>
							</div>
					<?php
						}
					?>


					



					<div class="bshare-custom"><a title="分享到" href="http://www.bShare.cn/" id="bshare-shareto" class="bshare-more">分享到</a><a title="分享到QQ空间" class="bshare-qzone">QQ空间</a><a title="分享到新浪微博" class="bshare-sinaminiblog">新浪微博</a><a title="分享到人人网" class="bshare-renren">人人网</a><a title="分享到腾讯微博" class="bshare-qqmb">腾讯微博</a><a title="分享到网易微博" class="bshare-neteasemb">网易微博</a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>






						<div  class="entry">
						<?php
							if (isset($_SESSION['log_id'])) {
						?>
							<form action="reply_submit.php" onsubmit="return check();" method="post">
								<input type="hidden" name="url" value="<?php echo $_SERVER['REQUEST_URI'];?>" />
								<input type="hidden" name="news_id" value="<?php echo $_REQUEST['id'];?>" />
								评论：
								<br />
								<textarea name="reply" id="reply" cols="50" rows="5"></textarea>
								<br />
								<input type="submit" id="search-submit" value="提交" />
							</form>
						<?php
							} else {
						?>
							<h5 >登录后才能进行评论 <a href="login.php">登录</a>&nbsp;&nbsp;&nbsp;&nbsp;没有帐号？<a href="register.php">注册</a></h5>
						<?php
							}
						?>
						</div>
					</div>
				<?php
					} else {
						echo "<script>alert('该博客不存在! ');window.location='index.php';</script>";
						return;
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
	<?php include_once 'common/footer.php';?>
</div>
<!-- end #footer -->



</body>
</html>
