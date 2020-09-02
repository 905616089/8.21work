<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-31 15:57:49
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\editboke.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4d1dfd0fe006_78456476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f975e15faf770ec595933f9906ca60b38024a6d' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\editboke.html',
      1 => 1598889237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4d1dfd0fe006_78456476 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
tinymce/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/editboke.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container ba">
    <div class="pannel editpannel">
        <form action="/server/8.15/mvc/index.php/admin/boke/editboke" method="post">
            <input type="hidden" name="cid" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["cid"];?>
' >
            <input type="hidden" name="id" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["id"];?>
' class="id">
            <div class="form-group">
                <label for="title"> 标题 </label>
                <input type="text" name="title" id="title" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["title"];?>
' class="form-control">
            </div>
            <div class="form-group">

                <label for="img" >图片</label>
                <img src='<?php echo $_smarty_tpl->tpl_vars['data']->value["img"];?>
' alt="" id="img" name="styleimg"style="width: 60%">
                <div id="imgsrc">
                    <input type="hidden" class="imgsrc" name="imgsrc" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["img"];?>
'>
                </div>
            </div>
            <div class="form-group">
                <label for="littlecons"> 博客概要 </label>
                <input type="text" name="littlecons" id="littlecons" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["littlecons"];?>
' class="form-control">
            </div>
            <div class="form-group">
                <label for="cons">博客详情</label>
                <textarea class="form-control" rows="3" name="cons" id="cons"><?php echo $_smarty_tpl->tpl_vars['data']->value["cons"];?>
</textarea>
            </div>

            <input type="submit" value="修改" class="btn btn-info">
        </form>


    </div>
</div>
</body>
</html><?php }
}
