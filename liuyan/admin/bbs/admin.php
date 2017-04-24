<?php
	ob_start();
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	body{
		font-size:12px;
	}
</style>
</head>

<body>
<?php
	if($_SESSION["admin"]!=session_id())
	{
		header("location:login.php");
	}
require_once('../admincheck.php');
	require("../mrconn.php");
	$sql="select * from leavewords order by id desc";
	$rs=mysql_query($sql);
	$recordcount=mysql_num_rows($rs);
	$pagesize=4;
	$pagecount=($recordcount-1)/$pagesize+1;
	$pagecount=(int)$pagecount;
	$pageno=$_GET["pageno"];
	if($pageno<1)
	{
		$pageno=1;
	}
	if($pageno>$pagecount)
	{
		$pageno=$pagecount;
	}
	$startno=($pageno-1)*$pagesize;
	$sql="select * from leavewords order by id desc limit $startno,$pagesize";
	$rs=mysql_query($sql);
?>
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bordercolor="#000000" bgcolor="#cccccc">
<?php
	while ($rows=mysql_fetch_assoc($rs))
	{
	?>
	  <tr>
    <td width="100" rowspan="2" align="center" class="forumRowHighlight"><img src="../../../<?php echo $rows["face"]?>" width="80" height="80" /></td>
    <td class="forumRowHighlight">留言标题:<?php echo $rows["leave_title"]?></td>
    <td class="forumRowHighlight">留言时间:<?php echo $rows["leave_time"]?></td>
  </tr>
  <tr>
    <td colspan="2" class="forumRowHighlight">留言内容:<br />
    <?php echo $rows["leave_contents"]?></td>
  </tr>
  <tr>
    <td class="forumRowHighlight">昵称:<?php echo $rows["username"]?></td>
    <td colspan="2" class="forumRowHighlight">
	<input type="button" class="button" onclick="location.href='reply.php?id=<?php echo $rows["id"]?>&pageno=<?php echo $pageno?>'" value="回复" />
	<input type="button" class="button" onclick="location.href='del.php?id=<?php echo $rows["id"]?>&pageno=<?php echo $pageno?>'" value="删除" />
	<input name="Submit" type="button" class="button" onclick="location.href='lock.php?ip=<?php echo $rows["ip"]?>&pageno=<?php echo $pageno?>'" value="锁定" />
	<input name="Submit2" type="button" class="button" onclick="location.href='unlock.php?ip=<?php echo $rows["ip"]?>&pageno=<?php echo $pageno?>'" value="解锁"  /></td>
  </tr>
  <tr>
  	<td colspan="3" class="forumRowHighlight">
	回复内容:<br/>
	<?php
		$sql="select * from reply where leaveid=".$rows['id']." order by id desc";
		$rs_reply=mysql_query($sql);
		if(mysql_num_rows($rs_reply)==0)
		{
			echo "<span style=color:red>暂无回复</span>";
		}
		else
		{
			while ($rows_reply=mysql_fetch_assoc($rs_reply))
			{
				?>
				<?php echo "<font color='red'>" .$rows_reply["reply_contents"]?><br/>
				<?php
			}
		}
	?>
	</td>
  </tr>
	<?php
	}
?>
<tr>


<td colspan="3" class="forumRowHighlight">
<table width="100%" border="0" bordercolor="#000000">
  <tr>
    <td>
	<?php
		for($i=1;$i<=$pagecount;$i++)
		{
		?>
		<a href="?pageno=<?php echo $i?>"><?php echo $i?></a>
		<?php
		}
	?>
	</td>
	<td>
	<?php
		if($pageno==1)
		{
		?>
		首页 | 上页 | <a href="?pageno=<?php echo $pageno+1?>">下页</a> | <a href="?pageno=<?php echo $pagecount?>">末页</a>
		<?php
		}
		else if($pageno==$pagecount)
		{
		?>
		<a href="?pageno=1">首页</a> | <a href="?pageno=<?php echo $pageno-1?>">上页</a> | 下页 | 末页
		<?php
		}
		else
		{
		?>
		<a href="?pageno=1">首页</a> | <a href="?pageno=<?php echo $pageno-1?>">上页</a> | <a href="?pageno=<?php echo $pageno+1?>">下页</a> | <a href="?pageno=<?php echo $pagecount?>">末页</a>
		<?php
		}
	?>
	</td>
  </tr>
</table>

</td>
</tr>
</table>
</body>
</html>
