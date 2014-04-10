$(document).ready(function(){
$("input[type=checkbox]").click(function(){
		if($(this).is("input:checked"))
		{
			$(this).val('1');
			$(this).next().val('1');
		}
		else
		{
			$(this).val('0');
			$(this).next().val('0');
		}
	});

});