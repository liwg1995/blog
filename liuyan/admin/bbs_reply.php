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
<?php
	$id=$_GET["id"];
	$pageno=$_GET["pageno"];
	if($_POST["Submit2"])
	{
		$content=$_POST["content"];
		$sql="update reply set reply_contents='$content' where leaveid=$id";
		mysql_query($sql);
		header("location:bbs_admin.php?pageno=$pageno");
	}
	$sql="select * from leavewords where id=$id";
	$rs=mysql_query($sql);
	$rows=mysql_fetch_assoc($rs);
?>
<?php
	$id=$_GET["id"];
	$pageno=$_GET["pageno"];
	if($_POST["Submit"])
	{
		$content=$_POST["content"];
		
		$sql="insert into reply (leaveid,leaveuser,reply_contents) values ($id,'管理员','$content')";
		mysql_query($sql);
		echo "<script language=javascript>alert('回复成功！');window.location='bbs_admin.php?pageno=$pageno'</script>";
	}
	$sql="select * from leavewords where id=$id";
	$rs=mysql_query($sql);
	$rows=mysql_fetch_assoc($rs);
?>
		 <?php
	  	$sql="select * from reply where leaveid=".$rows["id"]." order by id desc";
		$rs_reply=mysql_query($sql);
		if(mysql_num_rows($rs_reply)==0)
		{
		?>
<form id="form1" name="form1" method="post" action="" onsubmit="return CheckForm()">
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bordercolor="#000000" bgcolor="#cccccc">
    <tr>
      <th colspan="2" bgcolor="#FFFFFF">管理员回复</th>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FFFFFF" class="forumRowHighlight"><?php echo $rows["leave_contents"]?></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF" class="forumRowHighlight">回复内容:</td>
      <td bgcolor="#FFFFFF" class="forumRowHighlight">&nbsp;</td>
    </tr>
	<tr>
		<td colspan="2" bgcolor="#FFFFFF" class="forumRowHighlight">
			  </td>
	</tr>
    <tr>
      <td colspan="2" align="left" bgcolor="#FFFFFF" class="forumRowHighlight"><label>
        <textarea name="content" cols="35" rows="5">暂无回复内容</textarea>
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="Submit" type="submit" class="button" value="提交" />
      &nbsp;
      <input name="Submit2" type="reset" class="button" value="重置" /></td>
    </tr>
  </table> 
  <?php
			
		}
		else
		{
		?>
				<?php
		
			while($rows_reply=mysql_fetch_assoc($rs_reply))
			{
			?>
		<form id="form1" name="form1" method="post" action="" onSubmit="return CheckForm()">
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bordercolor="#000000" bgcolor="#cccccc">
    <tr>
      <th colspan="2" bgcolor="#FFFFFF">管理员回复</th>
    </tr>
    
	<tr>
		<td colspan="2" bgcolor="#FFFFFF" class="forumRowHighlight">			  </td>
	</tr>
    <tr>
      <td colspan="2" align="left" bgcolor="#FFFFFF" class="forumRowHighlight"><label>
        <textarea name="content" cols="35" rows="5"><?php echo $rows_reply["reply_contents"]?></textarea>
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="Submit2" type="submit" class="button" id="Submit2" value="提交" />
      &nbsp;
      <input name="Submit2" type="reset" class="button" value="重置" /></td>
    </tr>
  </table>		
  <?php
			}
		}
	  ?>	
</form>
</body>
</html>