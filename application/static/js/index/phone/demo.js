var bodyHeight = document.documentElement.clientHeight;
var container = document.querySelectorAll(".container");

var pages = 0;
for (var i = 0; i < container.length; i++) {
    container[i].style.height = bodyHeight - 1 + "px";
}


// 酒瓶
var centerImg = document.querySelectorAll(".container-center img");


centerImg[0].style.opacity = 1;
centerImg[0].style.marginTop = 0;


var title = document.querySelectorAll(".container-left-content .title");
for (var i = 0; i < 3; i++) {
    title[i].style.transition = "all 1s ease-out " + i * 0.2 + "s";
    title[i].style.opacity = 1;
    title[i].style.paddingRight = 0;
}



$(document).hammer().bind("panup",function(){
    for(var i = 0; i < container.length; i++){
        centerImg[i].style.opacity = 1;
        centerImg[i].style.marginTop = 0;

    }
    for (var i = 0; i < 9; i++) {
        title[i].style.transition = "all 1s ease-out " + i * 0.2 + "s";
        title[i].style.opacity = 1;
        title[i].style.paddingRight = 0;
    }
    
   
})


$(document).hammer().bind("pandown",function(){
    console.log(2)
   
})

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
            console.log("xia");
            pages++;
            if (pages == 2 || pages > 2) {
                pages = 2;
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

            pages--;
            var s = pages * bodyHeight;
            event.preventDefault();
            console.log(s);

            toPage(s);
            if (pages == 0 || pages < 0) {
                pages = 0;
            }
  


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








$(".top-right").hammer().bind("tap",function(){
    $(".navigationWeb").animate({right:0+"px"},500);
})

$(".close").hammer().bind("tap",function(){
    $(".navigationWeb").animate({right:-600+"px"},500)
})



