<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 12:55:07
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\displayusemeeage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6de8ab91ab95_78315662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faa33da2f6887e78de07cb6da390dc7d26b1bdae' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\displayusemeeage.html',
      1 => 1601038454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6de8ab91ab95_78315662 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/category.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/category.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/upload.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="box">
    <h1>用户建议</h1>
    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <table class="table table-bordered" style='table-layout:fixed;'>
        <thead>
        <tr>
            <td style='width: 20%;'>建议ID</td>
            <td  style='width:20%;'>用户名</td>
            <td  style='width:20%;'>用户建议</td>
            <td  style='width:20%;'>提交时间</td>
        </tr>
        </thead>
        <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

    </table>
    <?php } else { ?>
    <table>
        <tr>
            <td>没有数据</td>
        </tr>
    </table>
    <?php }?>
</div>
</body>
</html><?php }
}
