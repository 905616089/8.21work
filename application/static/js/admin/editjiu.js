

$(function () {
    var uploadObj=new upload();
    console.log(document.querySelector("#imgsrc"))
    uploadObj.multiple=true;
    uploadObj.createView({
        parent:document.querySelector("#imgsrc"),

    })
    uploadObj.up("/server/8.15/mvc/index.php/admin/category/uploadimg",function (e) {
        $(".imgsrc").val(e);
})

    var uploadObj1=new upload();

    uploadObj1.multiple=true;
    uploadObj1.createView({
        parent:document.querySelector(".jval1")
    })
    uploadObj1.up("/server/8.15/mvc/index.php/admin/category/uploadimg",function (e) {
        $(".jval").val(e);
    })


})







