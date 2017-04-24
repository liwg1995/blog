function is_number(str)
{
	exp=/[^0-9()-]/g;
	if(str.search(exp) != -1)
	{
		return false;
	}
	return true;
}
function is_email(str)
{ if((str.indexOf("@")==-1)||(str.indexOf(".")==-1)){
	
	return false;
	}
	return true;
}

function CheckInput(){

	if(form1.username.value==''){
		alert("您没有填写昵称！");
		form1.username.focus();
		return false;
	}
	if(form1.username.value.length>20){
		alert("昵称不能超过20个字符！");
		form1.username.focus();
		return false;
	}

	if(!is_number(document.form1.qq.value)){
		alert("QQ号码必须是数字！");
		form1.qq.focus();
		return false;
	}

	if( form1.email.value =="") {
                alert("请输入您的E-mail !")
		form1.email.focus();
        return false;
    }

	if(!is_email(form1.email.value))
	{ alert("非法的EMail地址！");
		form1.email.focus();
	return false;
	}

	if(form1.title.value==''){
		alert("您没有填写留言标题！");
		form1.title.focus();
		return false;
	}
	if(form1.title.value.length>20){
		alert("留言标题不能超过20个字符！");
		form1.title.focus();
		return false;
	}

	if(form1.content.value==''){
		alert("您没有填写留言内容！");
		form1.content.focus();
		return false;
	}
	if(form1.content.value.length>255){
		alert("留言内容超过255个字符！");
		form1.content.focus();
		return false;
	}
	
	return true;
}