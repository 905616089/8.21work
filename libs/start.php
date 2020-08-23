<?php

if(!defined("MVC")){
    die("访问路径不合法");
}
//服务器所在的根路径
define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"]);
//入口文件的路径
define("ENTRY_PATH",ROOT_PATH.$_SERVER["SCRIPT_NAME"]);
//框架所在路径
define("MAIN_PATH",dirname(ENTRY_PATH)."/");
//核心库所在的路径
define("LIBS_PATH",MAIN_PATH."libs".DIRECTORY_SEPARATOR);
//插件所在的路径
define("PLU_PATH",MAIN_PATH."application"."/");
//模板所在路径
define("TEMPLATE_PATH",APP_NAME."template".DIRECTORY_SEPARATOR);
//编译文件所在的目录
define("COMPILE_PATH",APP_NAME."compile".DIRECTORY_SEPARATOR);
//缓存文件所在目录
define("CACHE_PATH",APP_NAME."cache".DIRECTORY_SEPARATOR);
//定义smarty路径
define("SMARTY_PATH",LIBS_PATH."smarty".DIRECTORY_SEPARATOR);
//定义字体路径
define("FONT_PATH",APP_NAME."static".DIRECTORY_SEPARATOR."font".DIRECTORY_SEPARATOR);



//服务器路径 通过http协议访问的路径
define("HOST_ADD","http://".$_SERVER["HTTP_HOST"]);
define("ENTRY_ADD",HOST_ADD.$_SERVER["SCRIPT_NAME"]);

define("MAIN_ADD",dirname(HOST_ADD.$_SERVER["SCRIPT_NAME"])."/");

define("APP_ADD",MAIN_ADD);

define("STATIC_ADD",APP_ADD.APP_DIR_NAME."static"."/");

define("CSS_ADD",STATIC_ADD."css"."/");

define("JS_ADD",STATIC_ADD."js"."/");

define("FONT_ADD",STATIC_ADD."font"."/");
define("IMG_ADD",STATIC_ADD."img"."/");


$config= include_once APP_NAME . "config.php";
include_once LIBS_PATH."route.class.php";
include_once SMARTY_PATH."Smarty.class.php";


function auto($classname){

//    echo MAIN_PATH.str_replace("\\","/",$classname).".class.php";
    include_once MAIN_PATH.str_replace("\\","/",$classname).".class.php";
}

spl_autoload_register("auto");

$result=new \libs\route();

$result->run();