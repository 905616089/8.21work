<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 13:26:23
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\product.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ba8ffc850c0_89804501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '808c853ae8858ca711b08acaae611668f2fdb530' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\product.html',
      1 => 1598793946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ba8ffc850c0_89804501 (Smarty_Internal_Template $_smarty_tpl) {
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
admin/product.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/product.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/upload.js"><?php echo '</script'; ?>
>
</head>
<body>

<div class="container ">
    <h1>风格特点</h1>
    <div class="boxs">
    <table class="table table-bordered" style="table-layout:fixed;">
        <thead>
        <tr>
            <td  style='width:20%;'>风格名称</td>
            <td  style='width:20%;'>风格缩略图</td>
            <td style='width: 20%;'>风格内容</td>
            <td style="width: 20%">操作</td>
        </tr>
        </thead>
        <?php echo $_smarty_tpl->tpl_vars['style']->value;?>

    </table>
    </div>

    <h1>统计数据</h1>
    <div class="boxs">
    <table class="table table-bordered" style="table-layout:fixed;">
        <thead>
        <tr>
            <td  style='width:20%;'>数据种类</td>
            <td  style='width:20%;'>具体数据</td>
            <td style='width: 20%;'>操作</td>
        </tr>
        </thead>
     <?php echo $_smarty_tpl->tpl_vars['num']->value;?>

    </table>
    </div>

    <h1>(品牌页)推荐商品</h1>
    <div class="boxs">
        <table class="table table-bordered" style="table-layout:fixed;">
            <thead>
            <tr>
                <td  style='width:25%;'>推荐酒的id</td>
                <td  style='width:25%;'>推荐酒的名字</td>
                <td  style='width:25%;'>图片</td>
                <td style='width: 25%;'>操作</td>
            </tr>
            </thead>
            <?php echo $_smarty_tpl->tpl_vars['num']->value;?>

        </table>
    </div>




</div>

</div>

<div class="fixdiv" style="width:700px;height: 100px;position: absolute;left: 0;bottom: 0;right: 0;top:0;margin: auto;box-shadow: 0 0 4px #000;background: white;display: none;z-index: 2">
    <div class="close" style="float: right">
        X
    </div>
    <div class="container">
    <form class="form-inline" style="margin-top: 30px" action="/server/8.15/mvc/index.php/admin/content/editnum" method="post">
        <input type="hidden" class="numid" name="numid">
        <div class="form-group">
            <label for="numname">数据种类</label>
            <input type="text" class="form-control" id="numname" name="numname">
        </div>
        <div class="form-group">
            <label for="num">具体数据</label>
            <input type="text" class="num" id="num" name="num">
        </div>
        <button type="submit" class="btn btn-info">修改</button>
    </form>
    </div>
</div>

<div class="black" style="width: 100%;height: 100%;background: black;opacity: .6;position: absolute;left: 0;top:0;display: none" >

</div>


</body>
</html><?php }
}
