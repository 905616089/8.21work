
$(function () {
    $(".addjiu").validate({
        ignore: "",
        rules:{
            jname:{
                required:true,
            },
            jcons:{
                required:true,
            },
            imgsrc:{
                required:true,
            },
            jval:{
                required:true,
            }


        },
        messages:{
            jname:{
                required:"酒的名字必填",
            },
            jcons:{
                required:"请输入酒的信息",

            },
            imgsrc:{
                required:"请选择一张图片",
            },
            jval:{
                required:"请选择介绍酒含量的图片",
            }
        }
    })
    var uploadObj = new upload();

    console.log(document.querySelector("#imgsrc"))
    uploadObj.multiple = true;
    uploadObj.createView({
        parent: document.querySelector("#imgsrc"),

    })
    uploadObj.up("/server/8.15/mvc/index.php/admin/category/uploadimg", function (e) {
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