<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>个人博客留言板</title>
<script type="text/javascript" src="images/js/jquery.js"></script>
<script type="text/javascript" src="images/js/chili-1.7.pack.js"></script>
<script type="text/javascript" src="images/js/jquery.easing.js"></script>
<script type="text/javascript" src="images/js/jquery.dimensions.js"></script>
<script type="text/javascript" src="images/js/jquery.accordion.js"></script>
<script language="javascript">
	jQuery().ready(function(){
		jQuery('#navigation').accordion({
			header: '.head',
			navigation1: true, 
			event: 'click',
			fillSpace: true,
			animated: 'bounceslide'
		});
	});
</script>
<style type="text/css">
<!--
body {
	margin:0px;
	padding:0px;
	font-size: 12px;
}
#navigation {
	margin:0px;
	padding:0px;
	width:147px;
}
#navigation a.head {
	cursor:pointer;
	background:url(images/main_34.gif) no-repeat scroll;
	display:block;
	font-weight:bold;
	margin:0px;
	padding:5px 0 5px;
	text-align:center;
	font-size:12px;
	text-decoration:none;
}
#navigation ul {
	border-width:0px;
	margin:0px;
	padding:0px;
	text-indent:0px;
}
#navigation li {
	list-style:none; display:inline;
}
#navigation li li a {
	display:block;
	font-size:12px;
	text-decoration: none;
	text-align:center;
	padding:3px;
}
#navigation li li a:hover {
	background:url(images/tab_bg.gif) repeat-x;
		border:solid 1px #adb9c2;
}
-->
</style>
</head>
<body>
<div  style="height:100%;">
  <ul id="navigation">
    <li> <a class="head">系统设置</a>
      <ul>
        <li><a href="ly_pwd.php" target="rightFrame">密码修改</a></li>
        <li><a href="ly_system.php" target="rightFrame">网站设置</a></li>
      </ul>
    </li>
	 <li><a class="head">留言管理</a>
       <ul>
        <li><a href="bbs_admin.php" target="rightFrame">查看留言</a></li>
      </ul>
    </li>
    <li> <a class="head">版本信息</a>
      <ul>
        <li>
          <div align="center">V0.3</div>
        </li>
      </ul>
    </li>
  </ul>
</div>
</body>
</html>