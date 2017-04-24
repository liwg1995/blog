<?php
	require("include/global.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>请留言吧~~~~~~</title>
<META name=keywords content="<?php echo $db->ly_system("system",3)?>">
<meta name="description" content="<?php echo $db->ly_system("system",4)?>">
<link href="images/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../imag/webico.ico" mce_href="imag/webico.ico" type="image/x-icon">
<script type="text/javascript" src="images/check.js"></script>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<body>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="109" align="right" valign="top" background="images/bjl2.jpg">&nbsp;</td>
    <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="40" align="center"><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="48" height="28" background="images/ttl1.jpg">&nbsp;</td>
            <td align="center" background="images/ttm.jpg" class="wfont">对我的博客有什么意见或者建议，请进行留言~~</td>
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
                <td>
                 
				 <table width="100%" height="100%" border="0" align="center" cellpadding="8" cellspacing="0">
        <tr>
          <td height="470" align="left" valign="top" bgcolor="#FFFFFF"><?php
	$ip=$_SERVER['REMOTE_ADDR'];
	$sql="select * from lockip where lockip='$ip'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)>0)
	{
		?>
		<script language="javascript">
			alert("抱歉!您已经被管理员锁定,可能因为您发表了不合适言论!\n请与管理员联系");
			location.href="index.php"
		</script>
		<?php
		die();
	}
	if($_POST["Submit"])
	{
		$username=$_POST["username"];
		$qq=$_POST["qq"];
		$email=$_POST["email"];
		$homepage=$_POST["homepage"];
		$face=$_POST["face"];
		$title=$_POST["title"];
		$content=$_POST["content"];
		$time=date('Y-m-d H:i:s');
		$ip=$_SERVER['REMOTE_ADDR'];
		$sql="insert into leavewords (username,qq,email,homepage,face,leave_title,leave_contents,leave_time,ip) values ('$username','$qq','$email','$homepage','$face','$title','$content','$time','$ip')";
		mysql_query($sql);
		echo "<script language=javascript>alert('您的留言已在审核中，请稍等！');window.location='index.php'</script>";
		?>
		<?php
	}
?>
<form id="form1" name="form1" method="post" action="" onsubmit=return(CheckInput()) style="margin-top:0px;">
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bordercolor="#000000" bgcolor="#CCCCCC">
    <tr>
      <td colspan="2" align="right" bgcolor="#FFFFFF"><a href="index.php">返回留言板</a>&nbsp;&nbsp;</td>
    </tr>
    <tr>
      <th colspan="2" bgcolor="#FFFFFF">添加留言(带红色 * 号为必填项)</th>
    </tr>
    <tr>
      <td width="74" align="center" bgcolor="#FFFFFF">网友昵称:</td>
      <td width="604" bgcolor="#FFFFFF"><input name="username" type="text" id="username" />
        &nbsp;<span class="style1">*</span></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF">网友扣扣:</td>
      <td bgcolor="#FFFFFF"><input name="qq" type="text" id="qq" /></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF">您的邮箱:</td>
      <td bgcolor="#FFFFFF"><input name="email" type="text" id="email" />
        &nbsp;<span class="style1">*</span></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF">个人主页:</td>
      <td bgcolor="#FFFFFF"><input name="homepage" type="text" id="homepage" value="http://" /></td>
    </tr>
    <tr>
      <td height="60" align="center" bgcolor="#FFFFFF">留言头像:</td>
      <td bgcolor="#FFFFFF"> 
	 					    <input type="radio" value="1" name="face" checked="checked" />
                            <img src="images/face/face1.GIF" border="0" />
                            <input type="radio" value="2" name="face" />
                            <img src="images/face/face2.GIF" border="0" />
                            <input type="radio" value="3" name="face" />
                            <img src="images/face/face3.GIF" border="0" />
                            <input type="radio" value="4" name="face" />
                            <img src="images/face/face4.GIF" border="0" />
                            <input type="radio" value="5" name="face" />
                            <img src="images/face/face5.GIF" border="0" />
                            <input type="radio" value="6" name="face" />
                            <img src="images/face/face6.GIF" border="0" />
                            <input type="radio" value="7" name="face" />
                            <img src="images/face/face7.GIF" border="0" />
							</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF">留言标题:</td>
      <td bgcolor="#FFFFFF"><input name="title" type="text" id="title" />
        &nbsp;<span class="style1">*</span></td>
    </tr>
	<tr>
		<td colspan="2" bgcolor="#FFFFFF">
		&nbsp;留言内容:		</td>
	</tr>
    <tr>
      <td colspan="2" bgcolor="#FFFFFF"><textarea name="content" cols="60" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form></td>
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
        <td height="55" align="center" class="wfont"><?php echo $db->ly_system("system",60)?> <!-- 源文件在不断更新中，本源码免费开源，保留版权信息，算是对原作者的一个支持，另外你可以获得本站免费技术支持和原程序升级服务-->
         <script type="text/javascript" src="http://www.xiariboke.com/net/cpt.js"></script></td>
      </tr>
      
    </table></td>
  </tr>
</table>
</body>
</html>
