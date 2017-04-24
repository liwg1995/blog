<?php
	require("include/global.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>欢迎来到留言板</title>
<META name=keywords content="<?php echo $db->ly_system("system",3)?>">
<meta name="description" content="<?php echo $db->ly_system("system",4)?>">
<link href="images/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../imag/webico.ico" mce_href="imag/webico.ico" type="image/x-icon">
</head>
<body>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="109" align="right" valign="top" background="images/bjl2.jpg">&nbsp;</td>
    <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="40"><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="48" height="28" background="images/ttl1.jpg">&nbsp;</td>
            <td align="center" background="images/ttm.jpg" class="wfont">对我的博客有什么建议或者意见，请留言~~~</td>
            <td width="43" height="28" background="images/ttr1.jpg">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="350" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="0">
			<table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="18" height="16" align="right" valign="bottom"><img src="images/1.jpg" width="18" height="16" /></td>
                <td height="12" background="images/1r.jpg">&nbsp;</td>
                <td width="17" height="16" align="left" valign="bottom"><img src="images/2.jpg" width="17" height="16" /></td>
              </tr>
              <tr>
                <td width="13" background="images/4s.jpg">&nbsp;</td>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="7"></td>
                  </tr>
                </table>
<table width="98%" border="0" align="center" cellpadding="5" cellspacing="1" bordercolor="#000000" bgcolor="#CCCCCC">
<tr>
	<td colspan="3" align="right" bgcolor="#FFFFFF">
	<a href="fk1.php">我要进行留言</a>&nbsp;&nbsp;
 <a href="admin/login.php">留言管理</a>&nbsp;&nbsp;
 <a href="../index.php">返回博客</a>&nbsp;&nbsp;
  </td>
</tr>
 <?php
//使用方法：
 if($db->ly_system("system",7)==1){
 $sql="select * from leavewords where is_audit=1 order by id desc"; // 查询的数据库表
 }else{
 $sql="select * from leavewords order by id desc"; // 查询的数据库表 
 }
 $queryc=mysql_query($sql); //执行SQL语句
 $nums=mysql_num_rows($queryc); ////总条目数
 $each_disNums=$page=$db->ly_system("system",6);  //每页显示的条目数 
 $sub_pages=2; //当 $subPage_type 为 2 时，每次显示的页数
 $pageNums = ceil($nums/$each_disNums); //总页数
 $subPage_link="index.php?&page="; //每个分页的链接
 $subPage_type=1;//为1时,显示结果1,为2时,显示结果2,显示分页的类型
 $current_page=$_GET['page']!=""?$_GET['page']:1; //当前被选中的页
 $currentNums=($current_page-1)*$each_disNums; //limit计算来用
 if($db->ly_system("system",7)==1){
 $sql="select * from leavewords where is_audit=1 order by id desc limit $currentNums,$each_disNums"; //SQL语句，此处分页计算
 }else{
 $sql="select * from leavewords order by id desc limit $currentNums,$each_disNums"; //SQL语句，此处分页计算
 }
 $query=mysql_query($sql); // 执行SQL主句
 while($rows=mysql_fetch_array($query)){
 ?>
  <tr>
    <td width="101" rowspan="2" align="center" bgcolor="#FFFFFF"><img src="images/face/face<?php echo $rows["face"]?>.gif" /></td>
    <td width="304" align="left" bgcolor="#FFFFFF">留言标题:<?php  if($db->ly_system("system",8)==1){echo strip_tags($rows["leave_title"]);}else{echo $rows["leave_title"];}?></td>
    <td width="211" align="left" bgcolor="#FFFFFF">发表于:<?php echo $rows["leave_time"]?></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" bgcolor="#FFFFFF">
	
	<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td><?php if($db->ly_system("system",8)==1){echo strip_tags($rows["leave_contents"]);}else{echo $rows["leave_contents"];}?></td>
  </tr>
</table>

	
    <?php
		$id=$rows["id"];
		$sql="select * from reply where leaveid=$id order by id desc";
		$rs_reply=mysql_query($sql);
		if(mysql_num_rows($rs_reply)==0)
		{
			echo "<span style='color:red'>暂无回复</span>";
		}
		else
		{
			while($rows_reply=mysql_fetch_assoc($rs_reply))
			{
				?>
				<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
    <td bgcolor="#F2F2F2"><?php echo "<font color='red'>管理员回复:</font><br>".$rows_reply['reply_contents']."<br>";?></td>
  </tr>
</table>

				<?php
			}
		}
	?></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFFF">昵称:<?php echo $rows["username"]?></td>
    <td colspan="2" align="right" bgcolor="#FFFFFF"><a href="mailto:<?php echo $rows["email"]?>" title="<?php echo $rows["email"]?>"><img src="images/face/email.gif" width="16" height="16" border="0"/></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo $rows["homepage"]?>" title="<?php echo $rows["homepage"]?>"><img src="images/face/homepage.gif" width="16" height="16" border="0" /></a>&nbsp;&nbsp;<a href="http://sighttp.qq.com/msgrd?v=1&;uin=<?php echo $rows["qq"]?>%20&site=http://www.qq.com&menu=yes" title="<?php echo $rows["qq"]?>" target="_blank"><img src="images/face/oicq.gif" width="16" height="16"  border="0"/></a>&nbsp;&nbsp;</td>
  </tr>
  <tr>
  	<td colspan="3" bgcolor="#FFFFFF" height="15"></td>
  </tr>
	<?php
	}
  ?>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="40" align="center"><?php $pg=new SubPages($each_disNums,$nums,$current_page,$sub_pages,$subPage_link,$subPage_type);?></td>
  </tr>
</table>
</td>
<td background="images/2x.jpg">&nbsp;</td>
              </tr>
              <tr>
                <td width="18" height="15" align="right" valign="top"><img src="images/4.jpg" width="18" height="15" /></td>
                <td height="12" background="images/3z.jpg">&nbsp;</td>
                <td width="17" height="15" align="left" valign="top"><img src="images/3.jpg" width="17" height="15" /></td>
              </tr>
            </table>
			  </td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td width="108" align="left" valign="top" background="images/bjr2.jpg">&nbsp;</td>
  </tr>
</table>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="114" valign="top" background="images/xm.jpg"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="55" align="center" class="wfont"><?php echo $db->ly_system("system",60)?>
          <!-- 源文件在不断更新中，本源码免费开源，保留版权信息，算是对原作者的一个支持，另外你可以获得本站免费技术支持和原程序升级服务-->
          <script type="text/javascript" src="http://www.xiariboke.com/net/cpt.js"></script></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
