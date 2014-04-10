$(document).ready(function(){
	var editor=CKEDITOR;
		editor.replace('goods_content');
	$("input[type=checkbox]").click(function(){
		if($(this).is("input:checked"))
		{
			$(this).val('1');
			$(this).next().next().val('1');
		}
		else
		{
			$(this).val('0');
			$(this).next().next().val('0');
		}
	});


	var btn_up=$("#btn_up"),
		btn_from=$("#up-form");

		btn_up.click(function(){
			btn_from.submit();
		});

});

function iframeOnLoad()
{
   var upload=document.getElementById("uploadIframe");
   var text=upload.contentWindow.document.body.innerText;
   if(/ok/.test(text))
   {
   	 $("#files").val(text.replace(/ok../,""));
   }
}