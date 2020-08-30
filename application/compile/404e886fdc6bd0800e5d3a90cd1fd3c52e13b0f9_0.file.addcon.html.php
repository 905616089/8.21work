<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-25 13:55:30
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\addcon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f451852d9cc38_56316252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '404e886fdc6bd0800e5d3a90cd1fd3c52e13b0f9' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\addcon.html',
      1 => 1598363661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f451852d9cc38_56316252 (Smarty_Internal_Template $_smarty_tpl) {
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
admin/addcon.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
/admin/addcon.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container">
<form action="/server/8.15/mvc/index.php/admin/content/addcon" method="post">
    <div class="form-group">
        <label for="cid">所属分类</label>
        <select class="form-control" id="cid" name="cid">

        </select>
    </div>
    <div class="form-group">
        <label for="ctitle">内容标题</label>
        <input type="text" class="form-control" id="ctitle" placeholder="标题" name="ctitle">
    </div>
    <div class="form-group">
        <label for="cons">内容主题</label>
        <textarea class="form-control" rows="3" name="cons" id="cons"></textarea>
    </div>
    <button type="submit" class="btn btn-default">添加</button>
</form>
</div>
</body>
</html><?php }
}
