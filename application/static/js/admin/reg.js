$(function () {
    console.log(1);
    $(".form-horizontal").validate({
        rules:{
            user:{
                required:true,
                minlength:3,
                remote:{
                    type: "post",url: "/server/8.15/mvc/index.php/admin/reg/checkname",
                    data:{
                        user:function () {
                            return $("input[name=user]").val();
                        }
                    }
                }
            },
            password:{
                required: true,
                minlength: 5,

            },
            password1:{
                required: true,
                minlength: 5,
                equalTo:"#password"
            }
        },
        messages:{
            user:{
                required:"用户名没有填写",
                minlength:"用户名长度大于3",
                remote: "用户名已存在"
            },
            password: {
                required:"密码没有填写",
                minlength:'密码长度大于5'
            },
            password: {
                required:"密码没有填写",
                minlength:'密码长度大于5',
                equalTo: "密码不一致"
            }
        }
    })


})