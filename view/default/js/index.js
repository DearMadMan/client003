$(document).ready(function(){
 var help=$("#help");
 help.hover(
 	function(){$(this).attr("src","view/default/images/i2.gif");},
 	function(){$(this).attr("src","view/default/images/i3.gif");}
 	);

 var user=$("#user");
 var pass=$("#pass");
 user.bind({
 	focus:function(){
 		if(user.val()=="您的QQ号码")
 		{
 			user.val("");
 			user.removeClass("user_0");
 			user.addClass("user_1");
 		}
 	},
 	blur:function()
 	{
 		if(user.val()=="")
 		{
 			user.val("您的QQ号码");
 			user.removeClass("user_1");
 			user.addClass("user_0");
 		}
 	}
 });

  pass.bind({
 	focus:function(){
 		if(pass.val()=="在本站登录的安全密码")
 		{
 			pass.val("");
 			pass.removeClass("user_0");
 			pass.addClass("user_1");
 		}
 	},
 	blur:function()
 	{
 		if(pass.val()=="")
 		{
 			pass.val("在本站登录的安全密码");
 			pass.removeClass("user_1");
 			pass.addClass("user_0");
 		}
 	}
 });
});