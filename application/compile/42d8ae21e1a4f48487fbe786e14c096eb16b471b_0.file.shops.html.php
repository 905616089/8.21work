<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-31 00:49:27
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\shops.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4c491765ead6_37410862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42d8ae21e1a4f48487fbe786e14c096eb16b471b' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\shops.html',
      1 => 1598834743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4c491765ead6_37410862 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h3>此页仅作展示，如想修改请进酒的分类页进行管理</h3>
    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <table class="table table-bordered" style='table-layout:fixed;'>
        <thead>
        <tr>
            <td  style='width:11.1%;'>酒的id</td>
            <td  style='width:11.1%;'>酒的名字</td>
            <td  style='width:11.1%;'>酒的图片</td>
            <td  style='width:11.1%;'>酒的详情</td>
            <td style='width: 11.1%;'>酒的价格</td>
            <td  style='width:11.1%;'>酒的容量</td>
            <td  style='width:11.1%;'>酒精度</td>
            <td style='width: 11.1%;'>原麦汁浓度</td>
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
