
	if(window.clipboardData)
	{
		 //IE
		 $("#a-link2").click(function(){
		 	window.clipboardData.setData("Text", $("#copy2").val());
			alert("您的推广代码已经复制到剪切板！");
		 });

	}
	else
	{
		var copy2 = $("#copy2");
		ZeroClipboard.setDefaults({
			moviePath: copy2.attr("data")+
			"/js/ZeroClipboard.swf"
		});
		var clip2 = new ZeroClipboard($("#a-link2"));
		clip2.on('dataRequested', function(client, args) {
			client.setText(copy2.val());
			$("#a-link2").val("复制成功");
			setTimeout(function(){$("#a-link2").val("获取代码")}, 3000)
		});

	}
