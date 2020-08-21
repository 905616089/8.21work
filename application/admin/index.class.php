<?php

if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
class index{

    function int(){

        $smarty=new smarty();
        $smarty->display("admin/login.html");
    }
    function login(){
        //防止sql注入
        $user=addslashes( $_POST["user"]);

        $password=md5(md5($_POST["password"]));
        $user=$_POST["user"];
//        $db=new  mysqli("localhost","root","","wui2006","3308");
//
//        if(mysqli_connect_error()){
//            die("数据库连接失败");
//        }
//        $db->query("set names utf8");

        $db=new db();
        $result=$db->db->query("select password from stu where user='{$user}' and password='{$password}'");

    if($result->num_rows<1){
        echo "用户不存在";
    }else{
        header("location:/server/8.15/mvc/index.php/admin/index/frist");
    }



    }
    function frist(){
        echo "首页";
    }
}