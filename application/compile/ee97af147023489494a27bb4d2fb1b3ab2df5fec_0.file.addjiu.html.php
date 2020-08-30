<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 12:04:37
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\addjiu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48f2d5090097_57640524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee97af147023489494a27bb4d2fb1b3ab2df5fec' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\addjiu.html',
      1 => 1598616274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48f2d5090097_57640524 (Smarty_Internal_Template $_smarty_tpl) {
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
admin/addjiu.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/upload.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
/admin/addjiu.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container ba">
    <div class="pannel editpannel">
        <form action="/server/8.15/mvc/index.php/admin/category/jiuadd" method="post">

            <div class="form-group">
                <label for="jname"> 酒的名字</label>
                <input type="text" name="jname" id="jname" class="form-control">
            </div>
            <div class="form-group">
                <label for="jimg" >酒的图片("请选择一张图片")</label>
                <div id="imgsrc">
                    <input type="hidden" class="imgsrc" name="imgsrc"  id="jimg">
                </div>
            </div>
            <div class="form-group">
                <label for="jcons">酒的详情</label>
                <textarea class="form-control" rows="3" name="jcons" id="jcons"></textarea>
            </div>
            <div class="form-group">
                <div class="jval1">
                    <input type="hidden" class="jval" name="jval" >
                </div>
            </div>
            <input type="submit" value="修改" class="btn btn-info">
        </form>


    </div>
</div>
</body>
</html><?php }
}
