<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>登录</title>
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
						<h2 class="title">登录</h2>
						<div class="entry">
						<?php
							$username = $_POST['username'];
							$password = $_POST['password'];



							$code=$_POST["code"];
		                    if($code<>$_SESSION["auth"])
		                    {
		                          echo "<script language=javascript>alert('验证码不正确！');window.location='login.php'</script>";
		                       ?>
		                    <?php
			                      die();
		                      }



		                      
							$result = mysql_query("select * from user where username='".mysql_real_escape_string($username)."' and password='".mysql_real_escape_string($password)."'");
							

							if ($rs = mysql_fetch_object($result)) {
								
								$_SESSION["log_id"] = $rs->id;


								$_SESSION["username"] =  $rs->username;
								
								echo "<script>window.location='index.php';</script>";
								

								return;
							}
							echo "<script>alert('用户名或密码错误! ');window.location='login.php';</script>";

                            






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
