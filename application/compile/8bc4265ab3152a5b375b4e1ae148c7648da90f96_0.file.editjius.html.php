<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 15:51:47
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\editjius.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4bcb13e51c07_57795101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bc4265ab3152a5b375b4e1ae148c7648da90f96' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\editjius.html',
      1 => 1598802705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4bcb13e51c07_57795101 (Smarty_Internal_Template $_smarty_tpl) {
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
admin/editjius.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container ba">
    <div class="pannel editpannel">
        <form action="/server/8.15/mvc/index.php/admin/jiu/editjiu" method="post">
            <label for="jid"> 酒的id</label>
            <input type="text" name="jid" value='<?php echo $_smarty_tpl->tpl_vars['row']->value["jid"];?>
' class="jid" id="jid" readonly unselectable='on'。>
            <div class="form-group">
                <label for="jname"> 酒的名字</label>
                <input type="text" name="jname" id="jname" value='<?php echo $_smarty_tpl->tpl_vars['row']->value["jname"];?>
' class="form-control">
            </div>
            <div class="form-group">
                <label for="jimg" >酒的图片("请选择一张图片")</label>
                <img src='<?php echo $_smarty_tpl->tpl_vars['row']->value["jimg"];?>
' alt="" id="jimg" name="jimg" style="width: 70px">
                <div id="imgsrc">
                    <input type="hidden" class="imgsrc" name="imgsrc" value='<?php echo $_smarty_tpl->tpl_vars['row']->value["jimg"];?>
'>
                </div>
            </div>
            <div class="form-group">
                <label for="jcons">酒的详情</label>
                <textarea class="form-control" rows="3" name="jcons" id="jcons"><?php echo $_smarty_tpl->tpl_vars['row']->value["jcons"];?>
</textarea>
            </div>
            <div class="form-group">
                <label for="jvales"> 酒的价格</label>
                <input type="text" name="jvales" id="jvales" value='<?php echo $_smarty_tpl->tpl_vars['row']->value["jvales"];?>
' class="form-control">
            </div>
            <div class="form-group">
                <label for="jml">酒的容量</label>
                <input type="text" name="jml" id="jml" class="jml form-control" value='<?php echo $_smarty_tpl->tpl_vars['row']->value["jml"];?>
'>
            </div>
            <div class="form-group">
                <label for="jvol">酒精度</label>
                <input type="text" name="jvol" id="jvol" class="jvol form-control" value='<?php echo $_smarty_tpl->tpl_vars['row']->value["jvol"];?>
'>
            </div>
            <div class="form-group">
                <label for="jp">原麦汁浓度</label>
                <input type="text" name="jp" id="jp" class="jp form-control" value='<?php echo $_smarty_tpl->tpl_vars['row']->value["jp"];?>
'>
            </div>
            <input type="submit" value="修改" class="btn btn-info">
        </form>


    </div>
</div>

</body>
</html><?php }
}
