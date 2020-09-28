
$(".top-right").hammer().bind("tap",function(){
    $(".navigationWeb").animate({right:0+"px"},500);
})

$(".close").hammer().bind("tap",function(){
    $(".navigationWeb").animate({right:-600+"px"},500)
})

