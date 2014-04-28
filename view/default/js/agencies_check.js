$(document).ready(function(){

$("#postid").bind("focus",function(){
    if($(this).val()=="请输入您要查询的 加盟商网址")
    {
        $(this).val("");
    }
});
$("#postid").bind("blur",function(){
    if($(this).val()=="")
    {
        $(this).val("请输入您要查询的 加盟商网址");
    }
});
$("#postid").bind("keyup",function(){
    $("#check-img").hide();
})

var other_val=$("#other").val();
if(other_val=="yes")
{
    $("#check-img").attr("class","is-jiameng");
                $("#check-img").fadeIn(100);
                $("#a-domain").attr("href","http://"+$("#postid").val());
}
if(other_val=="no")
{
      $("#check-img").attr("class","no-jiameng");
                  $("#check-img").fadeIn(100);
}
console.log(other_val);

});



function CheckAgencies()
{
    var domain=$("#postid").val();
    $.ajax({
        type:"post",
        dataType:"text",
        cache:false,
        url:"agencies_check.php",
        data:"act=check&domain="+domain,
        success:function(msg){

            if(msg=="ok")
            {
                $("#check-img").attr("class","is-jiameng");
                $("#check-img").fadeIn(100);
                $("#a-domain").attr("href","http://"+$("#postid").val());
            }
            else if(msg=="no")
            {
                  $("#check-img").attr("class","no-jiameng");
                  $("#check-img").fadeIn(100);
            }
            else
            {
                alert(msg);
            }

        },
        complete:function(msg)
        {
            //alert(msg.responseText);
            console.log(msg);
        }
    });
}