<?php
if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;

class us{
    function int(){
        $smarty=new smarty();
        $database=new db();
        $this->db=$database->db;
        $us="";
        $usmessage="";
        $this->getus($us);
        $this->getusmessage($usmessage);
        $smarty->assign("us",$us);
        $smarty->assign("usmessage",$usmessage);
        $smarty->display("admin/us.html");
    }
    function getus(&$us){
        $request=$this->db->query("select * from us");
        while ($row=$request->fetch_assoc()){
            $us.='<tr><td>'.$row["usname"].'</td><td>'.$row["uscons"].'</td><td><a href="/server/8.15/mvc/index.php/admin/us/editus?id='.$row["id"].'" id="'.$row["id"].'" class="fix">修改</a></td></tr>';
        }
    }
    function getusmessage(&$usmessage){
        $request=$this->db->query("select * from usmessage");
        while ($row=$request->fetch_assoc()){
            $usmessage.='<tr><td>'.$row["storename"].'</td><td>'.$row["tel"].'</td><td>'.$row["email"].'</td><td>'.$row["address"].'</td><td><a href="/server/8.15/mvc/index.php/admin/us/editusmessage?id='.$row["storeid"].'" id="'.$row["storeid"].'" class="fix">修改</a>  <a href="/server/8.15/mvc/index.php/admin/us/delmessage?id='.$row["storeid"].'">删除</a> </td></tr>';
        }
    }

    function editus(){

        $database=new db();
        $this->db=$database->db;
        $id=$_GET["id"];
        $request=$this->db->query("select * from us where id=".$id);

        $row=$request->fetch_assoc();

        $smarty=new smarty();
        $smarty->assign("data",$row);

        $smarty->display("admin/editus.html");

    }

    function edituss(){
        $database=new db();
        $this->db=$database->db;
        $id=$_POST["id"];
        $usname=$_POST["usname"];
        $uscons=$_POST["uscons"];
        $this->db->query("update us set usname='$usname',uscons='$uscons' where id=".$id);
        if ($this->db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/us/int");
        }

    }

    function editusmessage(){
        $storeid=$_GET["id"];
        $database=new db();
        $this->db=$database->db;
        $request=$this->db->query("select * from usmessage where storeid=".$storeid);
        $row=$request->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/editmessage.html");

    }

    function  editmessages(){
        $storeid=$_POST["storeid"];
        $storename=$_POST["storename"];
        $tel=$_POST["tel"];
        $email=$_POST["email"];
        $address=$_POST["address"];
        $database=new db();
        $this->db=$database->db;
        $this->db->query("update usmessage set storename='$storename',tel='$tel',email='$email',address='$address' where storeid=".$storeid);
        if($this->db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/us/int");
        }

    }

    function delmessage(){
       $storeid=$_GET["id"];
        $database=new db();
        $this->db=$database->db;
        $this->db->query("delete from usmessage where storeid=".$storeid);
        if($this->db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/us/int");
        }
    }

    function addmessage(){
        $smarty=new smarty();
        $smarty->display("admin/addmessage.html");
    }
    function addmessages(){
        $storename=$_POST["storename"];
        $tel=$_POST["tel"];
        $email=$_POST["email"];
        $address=$_POST["address"];
        $database=new db();
        $this->db=$database->db;

        $this->db->query("insert into usmessage (storename,tel,email,address) values ('$storename','$tel','$email','$address')");
        if($this->db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/us/int");
        }
    }





}