<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 15:46:22
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\addjius.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4bc9ce334322_80483432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1204830ba342a5136caeeca5b17b0816b73ceb35' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\addjius.html',
      1 => 1598802373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4bc9ce334322_80483432 (Smarty_Internal_Template $_smarty_tpl) {
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
/admin/editjius.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container ba">
    <div class="pannel editpannel">
        <form action="/server/8.15/mvc/index.php/admin/jiu/addjius" method="post">
            <div class="form-group">
                <label for="jname"> 酒的名字</label>
                <input type="text" name="jname" id="jname" class="form-control">
            </div>
            <div class="form-group">
                <label for="jimg" >酒的图片("请选择一张图片")</label>
                <div id="imgsrc">
                    <input type="hidden" class="imgsrc" name="imgsrc"  id="jimg">
                </div>
            </div>
            <div class="form-group">
                <label for="jcons">酒的详情</label>
                <textarea class="form-control" rows="3" name="jcons" id="jcons"></textarea>
            </div>
            <div class="form-group">
                <label for="jvales">酒的价格</label>
                <input type="text" name="jvales" id="jvales" class="jvales form-control">
            </div>
            <div class="form-group">
                <label for="jml">酒的容量</label>
                <input type="text" name="jml" id="jml" class="jml form-control">
            </div>
            <div class="form-group">
                <label for="jvol">酒精度</label>
                <input type="text" name="jvol" id="jvol" class="jvol form-control">
            </div>
            <div class="form-group">
                <label for="jp">原麦汁浓度</label>
                <input type="text" name="jp" id="jp" class="jp form-control">
            </div>
            <input type="submit" value="修改" class="btn btn-info">
        </form>


    </div>
</div>
</body>
</html><?php }
}
