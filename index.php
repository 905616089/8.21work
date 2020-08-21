<?php
header("content-type:text/html;charset:utf8");
define("MVC",true);
// 应用文件夹 PHP常用的魔术常量 __DIR__ __CLASS__ __FILE__

define("APP_DIR_NAME","application".DIRECTORY_SEPARATOR);
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME);

require_once "libs/start.php";











