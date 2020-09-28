$(function () {
    $(".form-horizontal").validate({
        rules:{
            user:{
                required:true,
                minlength:3
            },
            password:{
                required: true,
                minlength: 5
            }
        },
        messages:{
            user:{
                required:"用户名没有填写",
                minlength:"用户名长度大于3"
            },
            password: {
                required:"密码没有填写",
                minlength:'密码长度大于5'
            }
        }
    })
})