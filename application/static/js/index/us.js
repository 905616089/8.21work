var topButton=document.querySelector(".top-right");
var one=document.querySelector(".one");
var two=document.querySelector(".two");
var closes=document.querySelector(".close");

topButton.onmouseover=function(){
    
    one.style.transform="rotate(30deg)";
    one.style.transformOrigin="right center";

    two.style.transform="rotate(-30deg)";
    two.style.transformOrigin="right center"
}
topButton.onmouseout=function(){
    one.style.transform="none";
    one.style.transformOrigin="right center";

    two.style.transform="none"
    two.style.transformOrigin="right center"
}
topButton.onclick=function(){
    $(".navigationWeb").animate({right:0+"px"},500)
}
closes.onclick=function(){
    $(".navigationWeb").animate({right:-400+"px"},500)
}
$(".from-button").click(function (res) {
    res.preventDefault();
    var data=$(".lists2").serialize();

    var flag = $(".lists2").valid();

    if (!flag) {
       alert("请确认信息完整")
        return;
    }
        $.ajax({
        url:"/server/8.15/mvc/index.php/admin/indexus/update",
        type:"POST",
        data:data,
        success:function (e) {
            console.log(e)
            alert("建议提交成功");
        },
        error:function (e) {
            console.log(e);
            alert("建议提交失败");
        }
    })
})

$(".lists2").validate({
        rules:{
            user:{
                required:true,
            },
            cons:{
                required: true,
                minlength: 5
            }
        },
        messages:{
            user:{
                required:"用户名没有填写",
            },
            password: {
                required:"内容没有填写",
                minlength:'内容至少个5字符'
            }
        }
    })







