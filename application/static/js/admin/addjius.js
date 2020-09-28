$(function () {
    $(".addjiu").validate({
        ignore:"",
        rules:{
            jname:{
                required:true,
            },
            imgsrc:{
                required:true,
            },
            jvales:{
                required:true,
                number:true
            },
            jcons:{
                required:true,
            },
            jml:{
                required:true,
                number:true
            },
            jvol:{
                required:true,
                number:true
            },
            jp:{
                required:true,
                number:true
            },

        },
        messages:{
            jname:{
                required:"请填写酒的名字",
            },
            imgsrc:{
                required:"请选择酒的图片",
            },
            jvales:{
                required:"请填写酒的价格",
                number:"酒的价格必须为数字",
            },
            jcons:{
                required:"请填写酒的介绍",
            },
            jml:{
                required:"请填写酒瓶的容量",
                number:"酒瓶的容量必须为数字"
            },
            jvol:{
                required:"请填写酒精度",
                number:"酒精度必须为数字"
            },
            jp:{
                required:"请填写原麦汁浓度",
                number:"原麦汁浓度必须为数字"
            },

        }
    });

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