<?php
	session_start();
	if (!isset($_SESSION['admin'])) {
		echo "<script>window.location='login.html';</script>";
		return;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>博客发布系统后台</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="../resources/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="../resources/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="../resources/css/invalid.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="../imag/webico.ico" mce_href="imag/webico.ico" type="image/x-icon">
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="../resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="../resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="../resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="../resources/scripts/jquery.wysiwyg.js"></script>
<script type="text/javascript">
	function clickMenu(child, father, src) {
		$('#main-nav   a').removeClass('current');
		$('#' + child).addClass('current');
		$('#' + father).addClass('current');
		$('#frame_content').attr('src', src);
	}

	$(function(){
		$("#frame_content").load(function(){
			var height = $(this).contents().find("#box").height() + 40;
			$(this).height( height < 700 ? 700 : height );
		});
	});

</script>
</head>
<body >
<div >
  <div id="sidebar">
    <div id="sidebar-wrapper">
      <h1 id="sidebar-title"><a href="#">博客发布系统后台</a></h1>
      <a href="../"><img id="logo" src="../resources/images/logo.png" alt="博客发布系统" /></a>
      <div id="profile-links">欢迎使用<br />
        <br />
        <a href="../" title="网站首页">网站首页</a> | <a href="../index.html" title="退出">退出</a> </div>
      <ul id="main-nav">
        <li> <a id="news" href="#" class="nav-top-item">博客管理</a>
          <ul>
            <li><a id="news_add" href="javascript:clickMenu('news_add', 'news', 'news/news_add.php')">发布博客</a></li>
            <li><a id="news_list" href="javascript:clickMenu('news_list', 'news', 'news/news_list.php')">博客列表</a></li>
          </ul>
        </li>
        <li> <a id="news_type" href="#" class="nav-top-item">博客类型管理</a>
          <ul>
            <li><a id="news_type_add" href="javascript:clickMenu('news_type_add', 'news_type', 'news_type/news_type_add.php')">新增博客类型</a></li>
            <li><a id="news_type_list" href="javascript:clickMenu('news_type_list', 'news_type', 'news_type/news_type_list.php')">博客类型列表</a></li>
          </ul>
        </li>
        <li> <a id="user" href="#" class="nav-top-item">用户管理</a>
          <ul>
            <li><a id="user_add" href="javascript:clickMenu('user_add', 'user', 'user/user_add.php')">新增用户</a></li>
            <li><a id="user_list" href="javascript:clickMenu('user_list', 'user', 'user/user_list.php')">用户列表</a></li>
          </ul>
        </li>
        <li> <a id="reply" href="#" class="nav-top-item">评论管理</a>
          <ul>
            <li><a id="reply_list" href="javascript:clickMenu('reply_list', 'reply', 'reply/reply_list.php')">评论列表</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div id="main-content">
	<iframe id="frame_content" src="main.php" width="100%" frameborder="0" scrolling="no"></iframe>
    <div id="footer"> <small>
      &#169; Copyright 2016 By 李武刚 | Powered by <a href="../">博客网站</a> | <a href="#"></a> </small> </div>
  </div>
</div>
</body>
</html>
