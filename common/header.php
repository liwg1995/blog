

<?php
error_reporting(0);
session_start();
	include_once 'conn.php';

?>




<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Mr.Li's Blog</a></h1>&nbsp &nbsp &nbsp
			<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=986728544&site=qq&menu=yes"><img border="0" src="imag/qq.png" alt="联系博主QQ" title="联系博主QQ"/></a> &nbsp 

			<img border="0" src="imag/email.png" alt="联系博主邮箱liwugang@liwugang.xin或者986728544@qq.com" title="liwugang@liwugang.xin或者986728544@qq.com"/>&nbsp
			<a target="_blank" href="http://weibo.com/u/3896717277"><img border="0" src="imag/weibo.png" alt="关注博主微博" title="关注博主微博"/></a> 
			<a target="_blank" href="http://www.lwg1995.cn"><img border="0" src="imag/zhuye.png" alt="博主WordPress博客" title="博主WordPress博客"/></a> &nbsp 




		</div>
		<div id="menu">
		    <div style="font-weight: bold">欢迎 &nbsp<h style="text-decoration: underline;color: red"><?php echo $_SESSION["username"];?></h> &nbsp 光临本站&nbsp &nbsp&nbsp<h style="color: blue">今日日期：<?php  echo  date('Y').'年'.date('m').'月'.date('d').'日'?></h>


             



            </div>
		    <br>
			<ul>
				<li class="current_page_item"><a href="index.php">首页</a></li>
				<?php
					if (isset($_SESSION['username'])) {

				?>
				   
					<li><a href="logout.php">退出</a></li>
				<?php
					} else {
				?>
					<li><a href="register.php">注册</a></li>
					<li><a href="login.php">登录</a></li>
				<?php
					}
				?>

				<li><a href="admin/" target="_blank">后台管理</a></li>
				<li><a href="liuyan/" target="_blank">留言板</a></li>
				<li><a href="aboutme.html" target="_blank">About me</a></li>
			</ul>

		</div>

	</div>


</div>


<script type="text/javascript">
(function($){
    $.fn.snow = function(options){
    var $flake = $('<div id="snowbox" />').css({'position': 'absolute','z-index':'9999', 'top': '-50px'}).html('&#10052;'),
    documentHeight  = $(document).height(),
    documentWidth   = $(document).width(),
    defaults = {
        minSize     : 10,
        maxSize     : 20,
        newOn       : 1000,
        flakeColor  : "#AFDAEF" /* 此处可以定义雪花颜色，若要白色可以改为#FFFFFF */
    },
    options = $.extend({}, defaults, options);
    var interval= setInterval( function(){
    var startPositionLeft = Math.random() * documentWidth - 100,
    startOpacity = 0.5 + Math.random(),
    sizeFlake = options.minSize + Math.random() * options.maxSize,
    endPositionTop = documentHeight - 200,
    endPositionLeft = startPositionLeft - 500 + Math.random() * 500,
    durationFall = documentHeight * 10 + Math.random() * 5000;
    $flake.clone().appendTo('body').css({
        left: startPositionLeft,
        opacity: startOpacity,
        'font-size': sizeFlake,
        color: options.flakeColor
    }).animate({
        top: endPositionTop,
        left: endPositionLeft,
        opacity: 0.2
    },durationFall,'linear',function(){
        $(this).remove()
    });
    }, options.newOn);
    };
})(jQuery);
$(function(){
    $.fn.snow({ 
        minSize: 5, /* 定义雪花最小尺寸 */
        maxSize: 50,/* 定义雪花最大尺寸 */
        newOn: 300  /* 定义密集程度，数字越小越密集 */
    });
});
</script>



