<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-27 13:10:52
  from 'E:\wamp64\www\server\8.15\mvc\application\template\index\demo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f47b0dcb696f0_70269943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66cc09b31effa5159783827e22b88060d8149e1b' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\index\\demo.html',
      1 => 1598533851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f47b0dcb696f0_70269943 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>仅供学习使用，侵删</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/demo.css">
</head>

<body>
    <!-- 顶部导航栏 -->
    <div class="top">
        <div class="top-logo">
            <a href="#" class="logo">
                <img src="https://ccdn.goodq.top/caches/b2722f2617dd98e9cdb285b51047a21d/aHR0cHM6Ly81ZDdhMDE2MGIwZTdkLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDkvOTgwYmRmNGQxZDE1ZWRlMDFkZTU3ZTAzNWQzZTdhOGItOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp"
                    alt="" style="width:99px;height: 72px;">
            </a>
        </div>

        <div class="top-right">
            <div class="one"></div>
            <div class="two"></div>
        </div>
    </div>

    <!-- 侧边网页导航 -->
    <div class="navigationWeb">
        <div class="close">X</div>
        <div class="contentnav">
            <div class="list1">
                <a href="#">网站首页
                    &nbsp-
                    &nbsp
                    <div class="English">
                        HOME
                    </div>
                </a>
            </div>
            <div class="list2">
                <a href="product.html">品牌介绍
                    &nbsp-
                    &nbsp
                    <div class="English1">
                        ABOUT US
                    </div>
                </a>
            </div>
            <div class="list2">
                <a href="center.html">产品中心
                    &nbsp-
                    &nbsp
                    <div class="English1">
                        PRODUCT 
                    </div>
                </a>
            </div>
            <div class="list2">
                <a href="boke.html">博客资讯
                    &nbsp-
                    &nbsp
                    <div class="English1">
                        NEW
                    </div>
                </a>
            </div>
            <div class="list2">
                <a href="us.html">联系我们
                    &nbsp-
                    &nbsp
                    <div class="English1">
                        CONTACT US
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- 中间背景 -->
    <?php echo $_smarty_tpl->tpl_vars['data']->value;?>


    <!-- 侧边导航栏 -->
    <div class="navigation">
        <ul>


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['num']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li>
                <a href="#"></a>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>


    </div>


    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/demo.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
