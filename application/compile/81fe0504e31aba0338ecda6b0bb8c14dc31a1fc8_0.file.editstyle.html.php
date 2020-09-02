<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-31 15:27:21
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\editstyle.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4d16d9d60753_40833344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81fe0504e31aba0338ecda6b0bb8c14dc31a1fc8' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\editstyle.html',
      1 => 1598887636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4d16d9d60753_40833344 (Smarty_Internal_Template $_smarty_tpl) {
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
admin/editstyle.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container ba">
<div class="pannel editpannel">
    <form action="/server/8.15/mvc/index.php/admin/content/editstyles" method="post">
        <input type="hidden" name="id" value='<?php echo $_smarty_tpl->tpl_vars['style']->value["id"];?>
' class="id">
        <div class="form-group">
            <label for="stylename"> 风格名称</label>
            <input type="text" name="stylename" id="stylename" value='<?php echo $_smarty_tpl->tpl_vars['style']->value["stylename"];?>
' class="form-control">
        </div>
        <div class="form-group">

            <label for="styleimg" >风格缩略图("请选择一张图片")</label>
            <img src='<?php echo $_smarty_tpl->tpl_vars['style']->value["styleimg"];?>
' alt="" id="styleimg" name="styleimg">
            <div id="imgsrc">
                <input type="hidden" class="imgsrc" name="imgsrc" value='<?php echo $_smarty_tpl->tpl_vars['style']->value["styleimg"];?>
'>
            </div>
        </div>
        <div class="form-group">
            <label for="stylecons">酒的详情</label>
            <textarea class="form-control" rows="3" name="stylecons" id="stylecons"><?php echo $_smarty_tpl->tpl_vars['style']->value["stylecons"];?>
</textarea>
        </div>

        <input type="submit" value="修改" class="btn btn-info">
    </form>


</div>
</div>




</body>
</html><?php }
}
