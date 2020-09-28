//顶部按钮事件
var topButton=document.querySelector(".top-right");
var one=document.querySelector(".one");
var two=document.querySelector(".two");
var closes=document.querySelector(".close");


//按钮
var btn1=document.querySelector(".btn1");
var btn2=document.querySelector(".btn2");
var img=document.querySelectorAll(".imglist-div img");


btn2.onclick=function(){
    for(var i=0;i<img.length;i++){
    
        var link=img[i].src;
        img[i].src=img[i].getAttribute("other");
        console.log(link);
        img[i].other=link;
        console.log(img[i].other);
    }
    btn2.style.background="black";
    btn2.style.color="white";
    btn1.style.background="white"
    btn1.style.color="black";
}
btn1.onclick=function(){
    for(var i=0;i<img.length;i++){
    
        var link=img[i].src;
        img[i].src=img[i].other
        img[i].other=link;
    }
    btn1.style.background="black";
    btn1.style.color="white";
    btn2.style.background="white"
    btn2.style.color="black";
}
var topButton=document.querySelector(".top-right");
var closes=document.querySelector(".close");



$(".top-right").hammer().bind("tap",function(){
    $(".navigationWeb").animate({right:0+"px"},500);
})

closes.onclick=function(){
    $(".navigationWeb").animate({right:-600+"px"},500)
}










