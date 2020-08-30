<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 11:00:21
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\editjiu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b86c572d3a6_75914840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba87d1322e8f0600c43b816fc6784fe7a004c226' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\editjiu.html',
      1 => 1598784770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b86c572d3a6_75914840 (Smarty_Internal_Template $_smarty_tpl) {
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
admin/editjiu.js"><?php echo '</script'; ?>
>

</head>
<body>
<div class="container ba">
<div class="pannel editpannel">
    <form action="/server/8.15/mvc/index.php/admin/category/editjiu" method="post">
        <input type="hidden" name="jid" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["jid"];?>
' class="jid">
        <div class="form-group">
            <label for="jname"> 酒的名字</label>
            <input type="text" name="jname" id="jname" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["jname"];?>
' class="form-control">
        </div>
        <div class="form-group">

            <label for="jimg" >酒的图片("请选择一张图片")</label>
            <img src='<?php echo $_smarty_tpl->tpl_vars['data']->value["jimg"];?>
' alt="" id="jimg" name="jimg">
            <div id="imgsrc">
                <input type="hidden" class="imgsrc" name="imgsrc" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["jimg"];?>
'>
            </div>
        </div>
        <div class="form-group">
            <label for="jcons">酒的详情</label>
            <textarea class="form-control" rows="3" name="jcons" id="jcons"><?php echo $_smarty_tpl->tpl_vars['data']->value["jcons"];?>
</textarea>
        </div>
        <div class="form-group">
            <label>酒的含量("请选择四张图片")</label>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jval']->value, 'k');
$_smarty_tpl->tpl_vars['k']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->do_else = false;
?>
    <img src='<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' alt="" class="jvals">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    <div class="jval1">
        <input type="hidden" class="jval" name="jval" value='<?php echo $_smarty_tpl->tpl_vars['data']->value["jval"];?>
'>
    </div>
</div>
    <input type="submit" value="修改" class="btn btn-info">
    </form>


</div>




</body>
</html><?php }
}
