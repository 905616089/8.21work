$(function () {

    $(".add").click(function () {
        $(location).attr('href', '/server/8.15/mvc/application/template/admin/addcon');
        // $("<div class='mask'>").appendTo("body").css({
        //     width:"100%",
        //     height:"100%",
        //     background:"#000",
        //     opacity:"0.3",
        //     position:"absolute",
        //     left:"0",
        //     top:"0",
        // })
        // $(".addpannel").css({
        //     display:"block",
        // })


    })


    $(".close").click(function () {

        $(".pannel").css({
            display: "none"
        })
        $(".mask").remove();
    })
//修改酒
//     $(".edit").click(function () {
//
//         jid=$(this).attr("attr");
//
//         $("input[type=hidden]").val(jid);
//         $("<div class='mask'>").appendTo("body").css({
//             width:"100%",
//             height:"100%",
//             background:"#000",
//             opacity:"0.3",
//             position:"absolute",
//             left:"0",
//             top:"0",
//         })
//         $(".editpannel").css({
//             display:"block",
//         })
//
//         $.ajax({
//             url:"/server/8.15/mvc/index.php/admin/category/showjiu",
//             data:{jid},
//             dataType:"json",
//             success:function (e) {
//                 $(".editpannel #jname").val(e["jname"]);
//                 $(".editpannel #jimg").val(e["jimg"]);
//                 $(".editpannel #jcons").val(e["jcons"]);
//                 $(".editpannel #jval").val(e["jval"]);
//                 $(".editpannel input[type=hidden]").val(e["jid"]);
//             },
//             error:function (e) {
//                 console.log(e)
//             }
//         })
//
//     })


//添加内容
//     $("input[type=button]").click(function () {
//     $(location).attr('href', 'admin/addcon.html');
// })



    
})