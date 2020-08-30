var contentImg = document.querySelector(".container-img");

var bodyHeight = document.documentElement.clientHeight;
var tops = contentImg.offsetTop;






// //浏览器兼容      
// if ((navigator.userAgent.toLowerCase().indexOf("firefox") != -1)) {
//     document.addEventListener("DOMMouseScroll", scrollFun, { passive: false });
// }
// else if (document.addEventListener) {
//     document.addEventListener("mousewheel", scrollFun, { passive: false });
// }
// else if (document.attachEvent) {
//     document.attachEvent("onmousewheel", scrollFun, { passive: false });
// }
// else {
//     document.onmousewheel = scrollFun;
// }

// //滚动事件处理函数
// function scrollFun(event) {
//     startTime = new Date().getTime();
//     var delta = event.detail || (-event.wheelDelta);

//     if (delta > 0) {
//         //向下滚动
//         var scolls = document.documentElement.scrollTop;
//         var s = scolls + bodyHeight;
//         if (s > tops) {

//             var t = s - tops;
//             if (t == 479 || t > 479) {
//                 return;
//             } else {
//                 toPage(-t);

//             }
//         }


//     }
//     if (delta < 0) {

//         var scolls = document.documentElement.scrollTop;
//         var s = tops + bodyHeight;
//         if (s > tops) {
//             var t = scolls - s + 448;
//             if (t == -448 || t < -448) {
//                 return;
//             } else {
//                 console.log(t)
//                 toPage(t);
//             }

//         }

//     }

// }

function toPage(s) {

    $(".container-mainimg").animate({ bottom: s + "px" }, 50);
}
//图片上的滚动栏
var containerImg2 = document.querySelector(".container-img-img2");
var num = 1;
var t=setInterval(function () {

    $(".container-img-img2").animate({ left: -num * 260 + "px" }, 500);
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

        $(".container-img-img2").animate({ left: -num * 260 + "px" }, 500);
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
            numdata()
        }
        return;
    }else{
        return;
    }
   
}


//底部按钮
var cont = 0;
var leftbtn = document.querySelector(".leftbtn");
var rightbtn = document.querySelector(".rightbtn");

rightbtn.onclick = function () {
    
    cont++;
    console.log(cont);
    if (cont > 2||cont==2) {
        cont = 1;
    } else {
        $(".center-img").animate({ left: -cont * 1250 + "px" }, 500);
    }
}
leftbtn.onclick=function(){
    cont--;
    if(cont==0||cont<0){
        cont=0;
        $(".center-img").animate({ left: -cont * 1250 + "px" }, 500);
    }else{
        $(".center-img").animate({ left: -cont * 1250 + "px" }, 500);
    }
}
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












