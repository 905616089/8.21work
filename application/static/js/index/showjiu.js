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
