<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 11:33:38
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\addtboke.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e31924a92c4_56831322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9bf89d24822604eeeeaa609c2aede37cdca8b90' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\addtboke.html',
      1 => 1598959960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e31924a92c4_56831322 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form action="/server/8.15/mvc/index.php/admin/boke/addtboke" method="post">
<!--            <input type="hidden" name="cid" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["cid"];?>
' >-->
            <input type="hidden" name="pid" value='<?php echo $_smarty_tpl->tpl_vars['row']->value["cid"];?>
' class="pid">
            <div class="form-group">
                <label for="type"> 所属分类 </label>
                <input type="text" name="type" id="type"  class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['row']->value["cname"];?>
' readonly="readonly" style="width: 30%">
            </div>
            <div class="form-group">
                <label for="title"> 标题 </label>
                <input type="text" name="title" id="title"  class="form-control">
            </div>
            <div class="form-group">

                <label for="imgsrc" >图片</label>
                <div id="imgsrc">
                    <input type="hidden" class="imgsrc" name="imgsrc" >
                </div>
            </div>
            <div class="form-group">
                <label for="littlecons"> 博客概要 </label>
                <input type="text" name="littlecons" id="littlecons"  class="form-control">
            </div>
            <div class="form-group">
                <label for="cons">博客详情</label>
                <textarea class="form-control" rows="3" name="cons" id="cons"></textarea>
            </div>

            <input type="submit" value="添加" class="btn btn-info">
        </form>


    </div>
</div>
</body>
</html><?php }
}
