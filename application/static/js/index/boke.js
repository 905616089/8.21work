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
//博客侧边栏
var title=document.querySelectorAll(".center-left1");
title[0].style.display="block";


$(".title2-text").click(function(){
    $(".box").css({display:"inline-block"});
  var pid=$(this).attr("value");
  console.log(pid);
    $(document).scrollTop(300);
  $.ajax({
      url:"/server/8.15/mvc/index.php/admin/indexboke/btn",
      data:{pid},
      async:false,
      success:function (e) {
          setTimeout(function () {
              $(".box").css({display:"none"});
              $(".center-left2").html(e);
          },2000);


      },
      error:function (e) {
          console.log(e);
      }
  })
})


    $(".center-left1 ").delegate('.left-main', 'click', function () {
        $(".box").css({display:"inline-block"});
        $(document).scrollTop(300);
        var id=$(this).attr("id");
        let that=this;
        console.log(id);
        $.ajax({
            url: "/server/8.15/mvc/index.php/admin/indexboke/boke",
            data: {id},
            async:false,
            success: function (e) {
                setTimeout(function () {
                    $(".box").css({display:"none"});
                    $(".center-left2").html(e);
                },2000);
            },
            error: function (e) {
                console.log(e);
            }
    });
})

    $(".right-imglist").delegate(".imglist-div","click",function () {
        $(".box").css({display:"inline-block"});
        $(document).scrollTop(300);
        var id=$(this).attr("id");
        console.log(id);
        $.ajax({
            url: "/server/8.15/mvc/index.php/admin/indexboke/news",
            data: {id},
            async:false,
            success: function (e) {
                setTimeout(function () {

                    $(".box").css({display:"none"});

                    $(".center-left2").html(e);

                },2000);
            },
            error: function (e) {
                console.log(e);
            }
        });




    })
