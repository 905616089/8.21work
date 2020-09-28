var contentImg = document.querySelector(".container-img");

var bodyHeight = document.documentElement.clientHeight;
var tops = contentImg.offsetTop;









//图片上的滚动栏
var containerImg2 = document.querySelector(".container-img-img2");
var num = 1;
var t=setInterval(function () {

    $(".container-img-img2").animate({ left: -num * 3.5 + "rem" }, 500);
    if (num == 0) {
        num = 1;
    } else {
        num = 0;
    }

}, 3000)
window.onblur=function(){
    console.log("失去焦点")
    clearInterval(t);
}
window.onfocus=function(){
    console.log("获得焦点")
    t=setInterval(function () {

        $(".container-img-img2").animate({ left: -num * 3.5 + "rem" }, 500);
        if (num == 0) {
            num = 1;
        } else {
            num = 0;
        }
    
    }, 3000)
}


//数据
var value = document.querySelectorAll(".num-value");
function numdata() {

    var a = 0;
    var p = 0;
    var l = 0

    var num1=value[0].getAttribute("num");
    var num2=value[1].getAttribute("num");
    var num3=value[2].getAttribute("num");


    var t = setInterval(function () {
        a++;
        if (a <num1) {
            value[0].innerHTML = a+1;
        } else {
            clearInterval(t);
        }
    }, 5)
    var y = setInterval(function () {
        p = p + 2;
        if (p < num2) {
            value[1].innerHTML = p+2;
        } else {
            clearInterval(y);
        }
    }, 0.5)
    var n = setInterval(function () {
        l++;
        if (l <num3) {
            value[2].innerHTML = l+1;
        } else {
            clearInterval(n);
        }
    }, 10)
}

var numbers=document.querySelector(".number-container");

var tops=numbers.offsetTop-document.documentElement.clientHeight;
window.onscroll=function(){
    var scoll=document.documentElement.scrollTop;
    if(value[0].innerHTML==""){
        if(scoll==tops||scoll>tops){
            numdata();
        }
        return;
    }else{
        return;
    }
   
}


$(".top-right").hammer().bind("tap",function(){
    $(".navigationWeb").animate({right:0+"px"},500);
})

$(".close").hammer().bind("tap",function(){
    $(".navigationWeb").animate({right:-600+"px"},500)
})














