//顶部按钮事件

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
$(".imglist-img").mouseover (function () {
    $(this).css({
        transform:"scale(1.1)",
    })
})
$(".imglist-img").mouseout (function () {
    $(this).css({
        transform:"scale(1)",
    })
})

var i=1;
function f() {
    if(i>$(".imgbox-img").length-3){
        i=0;
    }
    console.log();
    var width=$(".imgbox-img")[0].offsetWidth;
    console.log($(".imgbox-img")[0].offsetWidth);
    $(".banner-img-box").animate({left:-i*width+"px"},500);
    i++;
}
var t=setInterval(f,5000);
window.onblur=function(){
    console.log("失去焦点")
    clearInterval(t);
}
window.onfocus=function(){
    var t=setInterval(f,5000);
}
