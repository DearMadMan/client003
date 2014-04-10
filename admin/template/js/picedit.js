var btn={};
$(document).ready(function(){

	var btn_up=$("input[type='button']"),
		btn_from=$("#up-form");

		btn_up.each(function(i){
			 this.picnum=i;
			$(this).click(function(){
				btn.pic=this.picnum;
				btn_from.submit();}
				);
		});

});

function iframeOnLoad()
{
   var upload=document.getElementById("uploadIframe");
   var text=upload.contentWindow.document.body.innerText;
   if(/ok/.test(text))
   {
   	 $("#pic"+(btn.pic+1)).val(text.replace(/ok../,""));
   }
}