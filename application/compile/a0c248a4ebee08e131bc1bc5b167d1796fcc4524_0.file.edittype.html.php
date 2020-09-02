<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-31 14:58:28
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\edittype.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4d10145cc0f6_83795025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0c248a4ebee08e131bc1bc5b167d1796fcc4524' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\edittype.html',
      1 => 1598885904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4d10145cc0f6_83795025 (Smarty_Internal_Template $_smarty_tpl) {
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
admin/editjiu.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/upload.js"><?php echo '</script'; ?>
>

</head>
<body>
<div class="container ba">
    <div class="pannel editpannel">
        <form action="/server/8.15/mvc/index.php/admin/boke/edittype" method="post">
            <input type="hidden" name="cid" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["cid"];?>
' class="cid">
            <div class="form-group">
                <label for="cname"> 类型名称</label>
                <input type="text" name="cname" id="cname" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["cname"];?>
' class="form-control">
            </div>
            <input type="submit" value="修改" class="btn btn-info">
        </form>


    </div>
</div>
</body>
</html><?php }
}
