<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-19 03:46:17
  from 'E:\wamp64\www\server\8.15\mvc\application\template\demo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3ca0893dc0b2_74693880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f6995bd78500c91189f08ed187b44115b01ff0f' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\demo.html',
      1 => 1597808771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3ca0893dc0b2_74693880 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
这是首页
dasda
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
<ul>

    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["age"];?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["sex"];?>
</li>
</ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
