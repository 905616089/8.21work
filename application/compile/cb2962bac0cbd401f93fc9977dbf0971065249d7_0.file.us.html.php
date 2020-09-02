<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-31 12:00:57
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\us.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ce6795b2270_41520621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb2962bac0cbd401f93fc9977dbf0971065249d7' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\us.html',
      1 => 1598875255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ce6795b2270_41520621 (Smarty_Internal_Template $_smarty_tpl) {
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
admin/jiu.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/jiu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/upload.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="box">
<h1>酒</h1>


<h3>关于我们</h3>

<table class="table table-bordered" style='table-layout:fixed;'>
    <thead>
    <tr>
        <td  style='width:33.3%;'>名称</td>
        <td  style='width:33.3%;'>介绍</td>
        <td  style='width:33.3%;'>操作</td>
    </tr>
    </thead>
    <?php echo $_smarty_tpl->tpl_vars['us']->value;?>

</table>




<h3>门店管理</h3>
    <form action="/server/8.15/mvc/index.php/admin/us/addmessage" method="post">

        <input type="submit" value="添加门店" class="btn btn-info add">

    </form>
<table class="table table-bordered" style='table-layout:fixed;'>
    <thead>
    <tr>
        <td  style='width:20%;'>门店</td>
        <td  style='width:20%;'>电话</td>
        <td  style='width:20%;'>邮箱</td>
        <td style='width:20%;'>地址</td>
        <td style='width:20%;'>操作</td>
    </tr>
    </thead>
    <?php echo $_smarty_tpl->tpl_vars['usmessage']->value;?>

</table>

</div>





</body>
</html><?php }
}
