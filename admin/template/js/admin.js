var xmlhttp=GetAjax();







function GetAjax()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	 	 xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  return xmlhttp;
}

function payit(id,obj)
{
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    	if(xmlhttp.responseText=="ok")
    	{
    		obj.parentNode.innerHTML="已打款";

    	}
    	else
    	{
    		alert(xmlhttp.responseText);
    	}
    }
  }
	xmlhttp.open("POST","ajax_user.php?act=payit",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("id="+id);
}


function SelectAll()
{
	$("input[type='checkbox']").each(function(){this.checked=true;});
}
function CancelAll()
{
	$("input[type='checkbox']").each(function(){this.checked=false;});
}
function Delete(url)
{
	if($("input[type='checkbox']:checked").length==0)
	{
		return ;
	}
	if(confirm("确定要删除？"))
	{
		var str="(";
			$("input[type='checkbox']:checked").each(function(){
				str+=""+$(this).val()+",";
			});
			str=str.match(/[\s\S]*[^,]/g)+")";
			xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
		    	if(xmlhttp.responseText=="ok")
		    	{
		    		$("input[type='checkbox']:checked").each(function(){
						$(this).parent().parent().remove();
					});

		    	}
		    	else
		    	{
		    		alert(xmlhttp.responseText);
		    	}
		    }
		  }
			xmlhttp.open("POST",url,true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("ids="+str);

	}
}

function pass(id,obj)
{

	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    	if(xmlhttp.responseText=="ok")
    	{
    		obj.parentNode.innerHTML="已审核";

    	}
    	else
    	{
    		alert(xmlhttp.responseText);
    	}
    }
  }
	xmlhttp.open("POST","ajax_user.php?act=passit",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("id="+id);
}
function mv()
{

}