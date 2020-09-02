<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-31 11:53:40
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\editmessage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ce4c4a11795_61784005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c9b540433037072cb225f4205e0db5da08bd32a' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\editmessage.html',
      1 => 1598874719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ce4c4a11795_61784005 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form action="/server/8.15/mvc/index.php/admin/us/editmessages" method="post">
            <input type="hidden" name="storeid" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["storeid"];?>
'>
            <div class="form-group">
                <label for="storename"> 门店</label>
                <input type="text" name="storename" id="storename" class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["storename"];?>
'>
            </div>
            <div class="form-group">
                <label for="tel"> 电话</label>
                <input type="text" name="tel" id="tel" class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["tel"];?>
'>
            </div>
            <div class="form-group">
                <label for="email"> 邮箱</label>
                <input type="text" name="email" id="email" class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["email"];?>
'>
            </div>
            <div class="form-group">
                <label for="address"> 地址</label>
                <input type="text" name="address" id="address" class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["address"];?>
'>
            </div>


            <input type="submit" value="修改" class="btn btn-info">
        </form>


    </div>
</div>
</body>
</html><?php }
}
