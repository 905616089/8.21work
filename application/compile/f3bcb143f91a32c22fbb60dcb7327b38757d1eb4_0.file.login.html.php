<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-22 01:06:20
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f406f8c2751a9_05109009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3bcb143f91a32c22fbb60dcb7327b38757d1eb4' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\login.html',
      1 => 1598058378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f406f8c2751a9_05109009 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">

    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/login.js"><?php echo '</script'; ?>
>
</head>
<body>

<div class="container">

    <form class="form-horizontal" action="/server/8.15/mvc/index.php/admin/index/login" method="post" >
        <h1>用户登录</h1>
        <div class="form-group">
            <label for="user" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user" placeholder="请输入用户名" name="user">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="请输入密码" name="password">
            </div>
        </div>

        <div class="form-group">
            <label for="code" class="col-sm-2 control-label">验证码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control line" id="code" placeholder="请输入验证码" name="code" style="display: inline-block">
                <img src="http://localhost/server/8.15/mvc/index.php/admin/index/mycode" alt="" onclick="this.src='http://localhost/server/8.15/mvc/index.php/admin/index/mycode?'+Math.random()" style="display: inline-block">
            </div>

        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> 记住密码
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">登录</button>
                <a href="/server/8.15/mvc/index.php/admin/reg/int" class="res">注册</a>
            </div>
        </div>
    </form>



</div>



</body>
</html><?php }
}
