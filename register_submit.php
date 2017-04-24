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
						<h2 class="title">注册</h2>
						<div class="entry">
						<?php 
							$username = $_POST['username'];
							$password = $_POST['password'];
							$sql = "select count(*) from user where username='".mysql_real_escape_string($username)."'";
							$result = mysql_query($sql);
							$row = mysql_fetch_row($result);
							$amount = $row[0];
							if ($amount) {
								echo "<script>alert('用户名已存在! ');window.location='register.php';</script>";
							} else {
								$sql = "insert into user(username, password) values('"
											.mysql_real_escape_string($username)."','"
											.mysql_real_escape_string($password)
										."')";
								$result = mysql_query($sql);
								echo "<script>alert('注册成功，转向登录页面... ');window.location='login.php';</script>";
							}
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
