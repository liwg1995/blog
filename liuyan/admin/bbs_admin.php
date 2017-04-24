<?php 
require_once('ly_check.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查看留言</title>
<link rel="stylesheet" href="images/css.css" type="text/css">
</head>
<body>
<table width="100%" border="0" cellpadding="5" cellspacing="0" class="table">
  <tr>
    <td class="bg_tr">&nbsp;留言管理</td>
  </tr>
</table>
<?php
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
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="td_bgf">
<?php
	while ($rows=mysql_fetch_assoc($rs))
	{
	?>
	  <tr>
    <td width="100" rowspan="2" align="center" class="td_bg"><img src="../images/face/face<?php echo $rows["face"]?>.gif" /></td>
    <td class="td_bg">留言标题:<?php echo $rows["leave_title"]?></td>
    <td class="td_bg">留言时间:<?php echo $rows["leave_time"]?></td>
  </tr>
  <tr>
    <td colspan="2" class="td_bg">留言内容:<br />
    <?php echo $rows["leave_contents"]?></td>
  </tr>
  <tr>
    <td class="td_bg">昵称:<?php echo $rows["username"]?></td>
    <td colspan="2" class="td_bg">
	<input type="button" class="button" onClick="location.href='bbs_reply.php?id=<?php echo $rows["id"]?>&pageno=<?php echo $pageno?>'" value="回复" />
	<input type="button" class="button" onClick="location.href='bbs_del.php?id=<?php echo $rows["id"]?>&pageno=<?php echo $pageno?>'" value="删除" />
	<input name="Submit" type="button" class="button" onClick="location.href='bbs_lock.php?ip=<?php echo $rows["ip"]?>&pageno=<?php echo $pageno?>'" value="锁定" />
	<input name="Submit2" type="button" class="button" onClick="location.href='bbs_unlock.php?ip=<?php echo $rows["ip"]?>&pageno=<?php echo $pageno?>'" value="解锁"  />
	<input name="Submit3" type="button" class="button" onClick="location.href='bbs_is_audit.php?id=<?php echo $rows["id"]?>&pageno=<?php echo $pageno?>'" value="<?php if($rows["is_audit"]=='1'){echo "已审核";}else{echo "未审核";}?>"  />
	</td>
  </tr>
  <tr>
  	<td colspan="3" class="td_bg">
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
<td colspan="3" align="center" class="bg_tr">
<?php
		for($i=1;$i<=$pagecount;$i++)
		{
		?>
		<a href="?pageno=<?php echo $i?>"><?php echo $i?></a>
		<?php
		}
	?>	
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
	?></td>
</tr>
</table>
</body>
</html>
