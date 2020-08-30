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

})