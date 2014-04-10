$(document).ready(function() {
	if(window.clipboardData)
	{
		 //IE
		 $("#a-link").click(function(){
		 	window.clipboardData.setData("Text", $("#copy").val());
			alert("您的推广代码已经复制到剪切板！");
		 });

	}
	else
	{
		var copy = $("#copy");
		ZeroClipboard.setDefaults({
			moviePath: copy.attr("data")+
			"/js/ZeroClipboard.swf"
		});
		var clip = new ZeroClipboard($("#a-link"));
		clip.on('dataRequested', function(client, args) {
			client.setText(copy.val());
			$("#a-link").val("复制成功");
			setTimeout(function(){$("#a-link").val("获取代码")}, 3000)
		});

	}

});