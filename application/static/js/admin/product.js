
$(function () {
    $(".fix").click(function () {
        var numid=$(this).attr("id");
        $(".numid").val(numid);
        $(".fixdiv").css({
            display:"block",
        })
        $(".black").css({
            display:"block",
        })
        $.ajax({
            url:"/server/8.15/mvc/index.php/admin/content/getnums",
            data:{numid},
            dataType:"json",
            success:function (e) {
                $(".fixdiv #numname").val(e["numname"]);
                $(".fixdiv #num").val(e["num"]);
            },
            error:function (e) {
                console.log(e);
            }
        })
    })
    $(".close").click(function () {
        $(".fixdiv").css({
            display: "none",
        })
        $(".black").css({
            display:"none",
        })
    })
})
