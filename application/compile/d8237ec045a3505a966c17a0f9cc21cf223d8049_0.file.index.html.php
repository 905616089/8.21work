<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 12:47:05
  from 'E:\wamp64\www\server\8.15\mvc\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6de6c9d5c006_19129068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8237ec045a3505a966c17a0f9cc21cf223d8049' => 
    array (
      0 => 'E:\\wamp64\\www\\server\\8.15\\mvc\\application\\template\\admin\\index.html',
      1 => 1601036682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6de6c9d5c006_19129068 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/index.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
/admin/index.js"><?php echo '</script'; ?>
>

</head>
<body>
<header>
    <div class="hright">

        <div class="mix">
            <img src="https://ccdn.goodq.top/caches/b2722f2617dd98e9cdb285b51047a21d/aHR0cHM6Ly81ZDdhMDE2MGIwZTdkLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDkvOTgwYmRmNGQxZDE1ZWRlMDFkZTU3ZTAzNWQzZTdhOGItOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp" alt="">
            <div class="rtext">
                啤酒内部管理平台
            </div>
        </div>

    </div>
    <div class="hleft">
        <div class="lmix">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAMAAACahl6sAAACFlBMVEUAAAD1//31//30//31//30//31//3////////1//31///3///2////1Xn1//3+////////03P0//31//z1///2/////8n1//31//z1//32//z1//z1//31//32//32///////+13/1//31//31//z2//3/+/P1//31//30//z0//31//3+1n3+2IT1//32//3/2IL1///3///4///3////2m3+2YX1//3/2IH0//z1//3/2Hj/1Xn+13/+2on93ZL93I/0//3+2IL/1n3/0m3/3Zf5////023/2Wz83ZP914H/14H+243846j84p3/0m34///+14H93ZH93pX73pr/1Gv+1n71//3/0W7/3szMfFT////3xarPhF7/4M///Pn2/fb5zbX/0nH81L/RjGnz9/LLe1P+5NX92cb5yK72/frw7uf85tfmzr77////+/b/4tL+3MnbrZPWnH3o1sj918PkxrPrtpv/03XOf1j58+v60Ln86LXyw6r+35j/13/enHv//vz67ePr3tP1yrPgvaj+4qHdtZ7/24v3+fX49/H95q7kqozZpYjUimXu5t797cX+3ZLTlHP769/49Nv+8M795Kj/2IXZlHH/+e/49+33+Ob39uHnsZXipYfWjmrRhmD/+Or68Oj/9uT48tTmrpH2++7/9d//59v/8tjhvqnuvqTbmHb/6+D+6r3+38DgooLs39SSCrEMAAAAV3RSTlMA9/zXi+ufEQ1mSkA3/noVCPvwXy8aAsy3lVaxq39uUwvx4NvFcwX058GkmurV0IZ4RTwmHwrp4t29axnty8GmnZCDVjcsKiYQt6SSal9KPySykH8+ILSaYGUpAAALy0lEQVR42uza3UuTURwH8PNsOvMFDd/fpqJlWlCkQthdN1139+UceKLYVsM1qG1umAxGc0jhJtiNBGoE3lQX9R82deOUZ3v2/J5zHlvQ50KEifrz/N7OM9l/Lcz19UwOzYQ7Jm5PrY9PhybC/TNDs73D7B+y2nPzznInmpgf7+juHWHtba735nQQblg3Jrrb9XRWOu6Cxlq+ucbazP07S/BkrH+VtYvFnlAnNATDbZFkK6Fb0BbsH2B/1cDNIMwITPWMsr9lNWTBoAczc+xv6B2HaYP3rj7D+sbg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" alt="">
            <div class="luser">
                <div class="utext">用户：<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</div>
            </div>
            <a href="loginout">退出</a>
        </div>
    </div>
</header>

<div class="container">
    <div class="cleft">
        <ul>
            <li>
                <a href="/server/8.15/mvc/index.php/admin/jiu/int" target="main"><div class="litext">酒</div></a>
            </li>
            <li>
                <a href="/server/8.15/mvc/index.php/admin/category/int" target="main"><div class="litext">啤酒简介</div></a>
            </li>
            <li>
                <a href="/server/8.15/mvc/index.php/admin/content/int" target="main"><div class="litext">品牌介绍</div></a>
            </li>
            <li>
                <a href="/server/8.15/mvc/index.php/admin/shops/int" target="main"><div class="litext">商品中心</div></a>
            </li>
            <li>
                <a href="/server/8.15/mvc/index.php/admin/boke/int" target="main"><div class="litext">品牌博客</div></a>
            </li>
            <li>
                <a href="/server/8.15/mvc/index.php/admin/us/int" target="main"><div class="litext">联系我们</div></a>
            </li>
            <li>
                <a href="/server/8.15/mvc/index.php/admin/us/usemessage" target="main"><div class="litext">用户建议</div></a>
            </li>
        </ul>

    </div>
    <div class="cright">

    <iframe src="/server/8.15/mvc/index.php/admin/jiu/int" frameborder="0" name="main"></iframe>
    </div>

</div>
<footer>
    <div class="company">
        @ 2019  酒业官网  All Rights reserved
    </div>
</footer>
</body>
</html><?php }
}
