<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 11:39:31
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\boke.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e32f3ca05a9_98276216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2774dce4c9806ea4f2de8dc01f1c7400aa7435a' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\boke.html',
      1 => 1598960328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e32f3ca05a9_98276216 (Smarty_Internal_Template $_smarty_tpl) {
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

    <div class="container">
        <h3>博客页</h3>
        <form action="/server/8.15/mvc/index.php/admin/boke/addtype" style="float: left">
            <input type="submit" class="btn btn-info" value="创建一个分类">
        </form>
        <form action="/server/8.15/mvc/index.php/admin/boke/addboke" style="float: right;margin-bottom: 20px">
            <input type="submit" class="btn btn-info" value="写一个博客">
        </form>

    <table class="table table-bordered" style='table-layout:fixed;'>
        <thead>
        <tr>
            <td  style='width:33.3%;'>等级</td>
            <td  style='width:33.3%;'>名称</td>
            <td style="width: 33.3%;">操作</td>
        </tr>
        </thead>
        <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

    </table>

    </div>

</div>



</body>
</html><?php }
}
