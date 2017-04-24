<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>个人博客网站</title>
<link href="resources/css/default.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="float/css/gdt-style.css">
<link rel="shortcut icon" href="imag/webico.ico" mce_href="imag/webico.ico" type="image/x-icon">
</head>
<body>

<div style="height:1000px;"></div>

<div class="side-bar"> 
	<a href="#" class="icon-qq">QQ在线咨询</a> 
	<a href="" class="icon-chat">微信<div class="chat-tips"><i></i><img style="width:138px;height:138px;" src="img/code.jpg" alt="微信订阅号"></div></a> 
	<a target="_blank" href="" class="icon-blog">微博</a> 
	<a href="mailto:admin@admin.com" class="icon-mail">mail</a> 
</div>



<div id="wrapper">
	<?php include_once 'common/header.php';?>
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
				<?php
					$expression = " where 1=1";
                  	if (isset($_REQUEST['s']) && $_REQUEST['s'] != "") {
                  		$searchText = $_REQUEST['s'];
                  		$expression.= " and title like '%".mysql_real_escape_string($searchText)."%'";
                  		$expression.= " or content like '%".mysql_real_escape_string($searchText)."%'";
                  	}
					// 获取当前页数
					if(isset($_GET['page']) ){
						$page = intval($_GET['page']);
					}
					else{
						$page = 1;
					}
					// 每页数量
					$page_size = 10;
					// 获取总数据量
					$sql = "select count(*) from news $expression";
					$result = mysql_query($sql);
					$row = mysql_fetch_row($result);
					$amount = $row[0];
					// 记算总共有多少页
					if($amount){
						//如果总数据量小于$pageSize，那么只有一页
						if($amount < $page_size ) {
							$page_count = 1;
						}
						if( $amount % $page_size ) { //取总数据量除以每页数的余数
							$page_count = (int)($amount / $page_size) + 1; //如果有余数，则页数等于总数据量除以每页数的结果取整再加一
						} else{
							$page_count = $amount / $page_size; //如果没有余数，则页数等于总数据量除以每页数的结果
						}
					} else{
						$page_count = 0;
					}

					$pagination = '';
					for ($i = 1; $i <= $page_count; $i++) {
						if ($page == $i) {
							$pagination .= '<a href="news_search.php?page='.$i.'" class="number current" title="'.$i.'">'.$i.'</a>';
						} else {
							$pagination .= '<a href="news_search.php?page='.$i.'" class="number" title="'.$i.'">'.$i.'</a>';
						}
					}


					$sql = "select * from news $expression order by publish_time desc limit ". ($page-1)*$page_size.", $page_size";
					$result = mysql_query($sql);
					while ($rs = mysql_fetch_object($result)) {
				?>
					<div class="post">
						<h3 class="title"><a href="news_detail.php?id=<?php echo $rs->id;?>"><?php echo $rs->title;?></a></h3>
						<div class="byline">
							<p class="meta"><?php echo $rs->publish_time;?></p>
							<p class="links"><a href="news_detail.php?id=<?php echo $rs->id;?>">阅读全文</a></p>
						</div>
					</div>
				<?php
					}
				?>
					<div class="pagination">
					<?php
						echo $pagination;
					?>
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
