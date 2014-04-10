$(document).ready(function() {
 var submit =$(".submit"),
 	 user_name=$("input[name='user_name']"),
 	 user_password=$("input[name='user_password']"),
 	 form=$("#form");
 	 submit.click(function(){
 	 	if(user_name.val()==""||user_password.val()==""||user_password.val()=="在本站登录的安全密码")
 	 	{
 	 		alert("不允许为空值");
 	 		return false;
 	 	}
 	 	// if(user_password.val()!=user_password_verify.val())
 	 	// {
 	 	// 	alert("两个密码不一致!");
 	 	// 	return false;
 	 	// }
 	 	if(user_password.val().length<6)
 	 	{
 	 		alert("密码位数小于6位");
 	 		return false;
 	 	}
 	 	reg=/^\d{5,11}$/;
 	 	if(!reg.test(user_name.val()))
 	 	{
 	 		alert("请输入正确的QQ号！");
 	 		return false;
 	 	}

 	 	form.submit();
 	 });
});