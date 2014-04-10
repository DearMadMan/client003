$(document).ready(function(){
$("textarea").each(function(i){
	$(this).keydown(function(){
		$(this).val($(this).text());
	});
});
});