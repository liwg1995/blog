<?php require_once('../admincheck.php'); ?>
<script language="javascript">
<!--
function CheckForm()
{
document.form1.content.value=document.form1.doc_html.value;

return true
}
-->
</script>
<link href="../style.css" rel="stylesheet" type="text/css" />
<?php
	require("../mrconn.php");
	$id=$_GET["id"];
	$pageno=$_GET["pageno"];
	if($_POST["Submit2"])
	{
		$content=$_POST["content"];
		
		$sql="update reply set reply_contents='$content' where leaveid=$id";
		mysql_query($sql);
		header("location:admin.php?pageno=$pageno");
	}
	$sql="select * from leavewords where id=$id";
	$rs=mysql_query($sql);
	$rows=mysql_fetch_assoc($rs);
?>


<?php
	require("../mrconn.php");
	$id=$_GET["id"];
	$pageno=$_GET["pageno"];
	if($_POST["Submit"])
	{
		$content=$_POST["content"];
		
		$sql="insert into reply (leaveid,leaveuser,reply_contents) values ($id,'管理员','$content')";
		mysql_query($sql);
		header("location:admin.php?pageno=$pageno");
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
		<form id="form1" name="form1" method="post" action="" onsubmit="return CheckForm()">
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