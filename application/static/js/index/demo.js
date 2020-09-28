var bodyHeight = document.documentElement.clientHeight;
var container = document.querySelectorAll(".container");
var a = document.querySelectorAll(".navigation ul li a");

a[0].style.background = "#f6f6f6";
var pages = 0;

console.log(container.length);

for (var i = 0; i < container.length; i++) {
    container[i].style.height = bodyHeight - 1 + "px";
}


// 酒瓶
var centerImg = document.querySelectorAll(".container-center img");


centerImg[0].style.opacity = 1;
centerImg[0].style.marginTop = 0;


//文字
var title = document.querySelectorAll(".container-left-content .title");
for (var i = 0; i < 3; i++) {
    title[i].style.transition = "all 1s ease-out " + i * 0.2 + "s";
    title[i].style.opacity = 1;
    title[i].style.paddingRight = 0;
}

//图片
var rihghtImg = document.querySelectorAll(".container-rihght-img");
for (var i = 0; i < 4; i++) {
    rihghtImg[i].style.transition = "all 1s ease-out " + i * 0.2 + "s";
    rihghtImg[i].style.opacity = 1;
    rihghtImg[i].style.paddingLeft = 0;
}



//鼠标滚轮事件
var startTime = 0, //翻屏起始时间  
    endTime = 0,
    now = 0;
//浏览器兼容
if ((navigator.userAgent.toLowerCase().indexOf("firefox") != -1)) {
    document.addEventListener("DOMMouseScroll", scrollFun, { passive: false });
}
else if (document.addEventListener) {
    document.addEventListener("mousewheel", scrollFun, { passive: false });
}
else if (document.attachEvent) {
    document.attachEvent("onmousewheel", scrollFun, { passive: false });
}
else {
    document.onmousewheel = scrollFun;
}

//滚动事件处理函数
function scrollFun(event) {
    startTime = new Date().getTime();
    var delta = event.detail || (-event.wheelDelta);

    if ((endTime - startTime) < -1000) {
        if (delta > 0) {
            //向下滚动
            console.log(pages);
            pages++;
            if (pages ==  (container.length-1)|| pages >  (container.length-1)) {
                pages =  (container.length-1);
            }

            centerImg[pages].style.opacity = 1;
            centerImg[pages].style.marginTop = 0;
            var s = pages * bodyHeight;
            console.log(s)
            event.preventDefault();
            toPage(s);

            for (var i = pages * 3; i < pages * 3 + 3; i++) {

                title[i].style.transition = "all 0.5s ease-out " + i * 0.2 + "s";
                title[i].style.opacity = 1;
                title[i].style.paddingRight = 0;
            }

            for (var i = pages * 4; i < pages * 4 + 4; i++) {
                var j=i-4;
                rihghtImg[i].style.transition = "all 0.5s ease-out " + j * 0.2 + "s";
                rihghtImg[i].style.opacity = 1;
                rihghtImg[i].style.paddingLeft = 0;
            }
            for(var i=0;i<a.length;i++){        
                a[i].style.background="transparent";
        
            }
            a[pages].style.background="#f6f6f6";


        }
        if (delta < 0) {
            //向上滚动
            if (pages == 0) {
                return;
            }
            centerImg[pages].style.opacity = 0;
            centerImg[pages].style.marginTop = 60 + "px";
            ;

            for (var i = pages * 3; i < pages * 3 + 3; i++) {

                title[i].style.transition = "all 1s ease-out " + i * 0.2 + "s";
                title[i].style.opacity = 0;
                title[i].style.paddingRight = 60 + "px";
            }

            for (var i = pages * 4; i < pages * 4 + 4; i++) {

                rihghtImg[i].style.transition = "all 1s ease-out " + i * 0.2 + "s";
                rihghtImg[i].style.opacity = 0;
                rihghtImg[i].style.paddingLeft = 60 + "px";
            }

            pages--;
            var s = pages * bodyHeight;
            event.preventDefault();
            console.log(s);

            toPage(s);
            if (pages == 0 || pages < 0) {
                pages = 0;
            }
            for(var i=0;i<a.length;i++){        
                a[i].style.background="transparent";
        
            }
            a[pages].style.background="#f6f6f6";


        }
        endTime = new Date().getTime();
    }
    else {
        event.preventDefault();
    }
}

function toPage(s) {

    $(document.documentElement).animate({ scrollTop: s }, 1000);
}


//侧边栏点击事件
for(let f=0;f<a.length;f++){
    a[f].onclick=function(){
        pages=f;
        var s = pages * bodyHeight;
        console.log(s);
        toPage(s);
        centerImg[pages].style.opacity = 1;
        centerImg[pages].style.marginTop = 0;
        for (var i = pages * 3; i < pages * 3 + 3; i++) {

            title[i].style.transition = "all 0.5s ease-out " + i * 0.2 + "s";
            title[i].style.opacity = 1;
            title[i].style.paddingRight = 0;
        }

        for (var i = pages * 4; i < pages * 4 + 4; i++) {

            rihghtImg[i].style.transition = "all 0.5s ease-out " + i * 0.2 + "s";
            rihghtImg[i].style.opacity = 1;
            rihghtImg[i].style.paddingLeft = 0;
        }
        for(var i=0;i<a.length;i++){        
            a[i].style.background="transparent";
    
        }
        a[pages].style.background="#f6f6f6";
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
    







