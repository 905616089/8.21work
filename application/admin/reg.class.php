<?php

if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
class reg{

    function int(){



        $smarty=new smarty();
        $smarty->display("admin/reg.html");


    }
    function add(){
        $user=$_POST["user"];
        $password=$_POST["password"];
        $password1=$_POST["password1"];

        if($password !==$password1){
            echo "密码不一致";
            return;
        }

        $db=new  mysqli("localhost","root","","wui2006","3308");

        if(mysqli_connect_error()){
            die("数据库连接失败");
        }

        $db->query("set names utf8");
        $request=$db->query("select user from stu where user='{$user}'");
        if($request->num_rows>=1) {
            return;
        }
        $password=md5(md5($password));
        $db->query("insert into stu (user,password) values ('$user','$password')");

        if($db->affected_rows>0){
            echo "插入成功";
        }
    }
    function checkname(){
        $user=$_POST["user"];
        $db=new  mysqli("localhost","root","","wui2006","3308");

        if(mysqli_connect_error()){
            die("数据库连接失败");
        }
        $db->query("set names utf8");


        $request=$db->query("select user from stu where user='{$user}'");

        if($request->num_rows<1){
            echo "true";
        }else{
            echo "false";
        }
    }


}



?>