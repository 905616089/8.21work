$(function () {
    $(".cleft li").click(function () {
        var index = $("ul li").index(this);
        $(".cleft li").css({
            background: "white",
        })
        $(this).css({
            background: "rgb(89,171,139)",
        })
    })

})