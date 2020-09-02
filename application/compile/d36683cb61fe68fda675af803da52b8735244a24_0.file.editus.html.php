<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-31 11:20:13
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\editus.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4cdced64e484_17810932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd36683cb61fe68fda675af803da52b8735244a24' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\editus.html',
      1 => 1598872809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4cdced64e484_17810932 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form action="/server/8.15/mvc/index.php/admin/us/edituss" method="post">
            <input type="hidden" name="id" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["id"];?>
'>
            <div class="form-group">
                <label for="usname"> 名称</label>
                <input type="text" name="usname" id="usname" class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["usname"];?>
'>
            </div>
            <div class="form-group">
                <label for="uscons"> 介绍</label>
                <input type="text" name="uscons" id="uscons" class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["uscons"];?>
'>
            </div>
            <input type="submit" value="修改" class="btn btn-info">
        </form>


    </div>
</div>

</body>
</html><?php }
}
