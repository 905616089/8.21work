<?php

if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\code;
use \libs\cookie;
class index{

    function int(){

        $smarty=new smarty();
        $smarty->display("admin/login.html");
    }
    function login(){
        //防止sql注入
        $user=addslashes( $_POST["user"]);
        $code=$_POST["code"];
        $password=md5(md5($_POST["password"]));
        $user=$_POST["user"];
//        $db=new  mysqli("localhost","root","","wui2006","3308");
//
//        if(mysqli_connect_error()){
//            die("数据库连接失败");
//        }
//        $db->query("set names utf8");

        if(!(isset($_SESSION["code"])&&$code==$_SESSION["code"])){
            echo "验证码有误";
            return;
        }
        $db=new db();
        $result=$db->db->query("select password from stu where user='{$user}' and password='{$password}'");

    if($result->num_rows<1){
        echo "用户不存在";
    }else{
        $_SESSION["login"]="yes";
        $_SESSION["user"]=$user;
        header("location:/server/8.15/mvc/index.php/admin/index/frist");
    }
//    $db->close();
    }
    function  loginout(){
        session_destroy();
        header("location:/server/8.15/mvc/index.php/admin/index/int");
    }
    function frist(){


        if(isset($_SESSION["login"])&&$_SESSION["login"]=="yes"){
            $smarty=new smarty();
            $smarty->assign("user",$_SESSION["user"]);
            $smarty->display("admin/index.html") ;
        }else{

            header("location:http://localhost/server/8.15/mvc/index.php");
        }


    }
    function mycode(){
        $code=new code();

        $code->out();
    }

    function indexshow(){
        $smarty=new smarty();
        $smarty->display("admin/indexshow.html") ;
    }
}