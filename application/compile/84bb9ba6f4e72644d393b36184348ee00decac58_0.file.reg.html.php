<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 11:44:59
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3e623b057456_90513786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84bb9ba6f4e72644d393b36184348ee00decac58' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\reg.html',
      1 => 1597923895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3e623b057456_90513786 (Smarty_Internal_Template $_smarty_tpl) {
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
admin/reg.css">
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
admin/reg.js"><?php echo '</script'; ?>
>

</head>
<body>


<div class="container">
<form class="form-horizontal" action="/server/8.15/mvc/index.php/admin/reg/add" method="post">
    <h1>用户注册</h1>
    <div class="form-group">
        <label for="user" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="user" placeholder="请输入用户名" name="user">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" placeholder="请输入密码" name="password">
        </div>

    </div>

    <div class="form-group">
        <label for="password1" class="col-sm-2 control-label">确认密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password1" placeholder="再次输入密码" name="password1">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">确定</button>
            <a href="/server/8.15/mvc/index.php/admin/index/int">已有帐号登录</a>
        </div>
    </div>
</form>
</div>

</body>
</html><?php }
}
