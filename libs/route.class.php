<?php
namespace libs;
if(!defined("MVC")){
    die("访问路径不合法");
}
class route{
    //模块
    private static $m;
    //类
    private static $s;
    //方法
    private static $a;

    private function getInfo(){
        $path=isset($_SERVER["PATH_INFO"])? substr($_SERVER["PATH_INFO"],1):"admin/index/int";


        $pathArr=explode("/",$path);

        self::$m=empty($pathArr[0])?"index":$pathArr[0];
        self::$s=empty($pathArr[1])?"index":$pathArr[1];
        self::$a=empty($pathArr[2])?"int":$pathArr[2];

    }
    function run(){
        $this->getInfo();

        $murl=APP_NAME.self::$m;

        if(is_dir($murl)){
            $curl=$murl.DIRECTORY_SEPARATOR.self::$s.".class.php";

            if(is_file($curl)){
                include_once $curl;

                if(class_exists(self::$s)){
                    $classname=self::$s;
                    $obj=new $classname();

                    if(method_exists($obj,self::$a)){
                        $method=self::$a;
                        $obj->$method();
                    }else{
                        die("this function not exsits");
                    }
                }else{
                    die("this class not exists");
                }

            }else{
                die("this class file not exsits");
            }

        }else{
            die("this module not exsits");
        }

    }
}