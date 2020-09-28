<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 07:39:50
  from 'E:\wamp64\www\server\8.15\mvc\application\template\index\phonedemo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c4d46a924a9_99410238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4e659297d6d9264c6e4a515ceca1fa8cd1066c6' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\index\\phonedemo.html',
      1 => 1600933187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c4d46a924a9_99410238 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/phone/rem.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/phone/zepto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/phone/hammer.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/phone/jquery-3.5.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/phone/jQueryhammer.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/phone/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/phone/demo.css">
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
                <div class="three"></div>
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
                    <a href="/server/8.15/mvc/index.php/admin/phone/product">品牌介绍
                        &nbsp-
                        &nbsp
                        <div class="English1">
                            ABOUT US
                        </div>
                    </a>
                </div>
                <div class="list2">
                    <a href="/server/8.15/mvc/index.php/admin/phone/center">产品中心
                        &nbsp-
                        &nbsp
                        <div class="English1">
                            PRODUCT 
                        </div>
                    </a>
                </div>
                <div class="list2">
                    <a href="/server/8.15/mvc/index.php/admin/phone/boke">博客资讯
                        &nbsp-
                        &nbsp
                        <div class="English1">
                            NEW
                        </div>
                    </a>
                </div>
                <div class="list2">
                    <a href="/server/8.15/mvc/index.php/admin/phone/us">联系我们
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

        <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/phone/demo.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
