<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>请登录本王博客</title>
<link href="resources/css/default.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="imag/webico.ico" mce_href="imag/webico.ico" type="image/x-icon">
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
function check() {
	if ($('#username').val() == '' || $('#password').val() == '') {
		alert('请输入用户名和密码！');
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
					<div class="post">
						<h2 class="title">请登录,之后才能评论哦</h2>
						<div class="entry">
						<form action="login_submit.php" onsubmit="return check();" method="post">
							用户名：<input type="text" name="username" id="username" size="20" /><br /><br />
							密　码：<input type="password" name="password" id="password" size="20" /><br /><br />

							<div class="chknumber">
                            验证码：
                            <input name="code" type="text" id="code" size="20" class="chknumber_input" />
              
                             <img src="common/verify.php" style="vertical-align:middle"  BORDER="0" ALT="" WIDTH="80" HEIGHT="30" align="absmiddle" onclick="javascript:reloadcode();" alt="看不清，换一张？" id="authImage"> <a href="javascript:reloadcode();">看不清，换一张？

                             <script language="JavaScript" type="text/JavaScript">
//重新获取验证字符 
                             function reloadcode() 
                               { 
                                     document.getElementById("authImage").src = 'common/verify.php?' + Math.random();
                                } 
                              </script>
                            </div>
							




							<input type="submit" id="search-submit" value="登录" />
						</form>
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
