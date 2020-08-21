<?php

if(!defined("MVC")){
    die("非法入侵");
}
class index{
    function int(){

        $smarty=new Smarty();

       $smarty->setTemplateDir(TEMPLATE_PATH);
       $smarty->setCompileDir(COMPILE_PATH);


       $smarty->display("admin/login.html");

//
  }
}