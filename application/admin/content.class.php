<?php

if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;

class content{
    function int(){
        $smarty=new smarty();
        $database=new db();
        $str="";
        $num="";

        $this->db=$database->db;
        $this->getnum($num);
        $this->getoption($str);
        $smarty->assign("num",$num);
        $smarty->assign("style",$str);
        $smarty->display("admin/product.html");

    }
    function getoption(&$str){
        $result=$this->db->query("select * from style");
        while ($row=$result->fetch_assoc()){
            $str.='<tr><td>'.$row["stylename"].'</td><td>'.$row["styleimg"].'</td><td>'.$row["stylecons"].'</td><td><a href="/server/8.15/mvc/index.php/admin/content/editstyle?id='.$row["id"].'">修改</a></td></tr>';
        }

    }
    private function getnum(&$num){

        $result=$this->db->query("select * from num");
        while ($row=$result->fetch_assoc()){
            $num.='<tr><td>'.$row["numname"].'</td><td>'.$row["num"].'</td><td><a id="'.$row["numid"].'" class="fix">修改</a></td></tr>';
        }
    }

    function editstyle(){
        $database=new db();
        $this->db=$database->db;
        $id=$_GET["id"];
        $result=$this->db->query("select * from style where id=".$id);
        $row=$result->fetch_assoc();

        $smarty=new smarty();
        $smarty->assign("style",$row);
        $smarty->display("admin/editstyle.html");
    }


    function editstyles()
    {
        $id=$_POST["id"];
        $stylename=$_POST["stylename"];
        $styleimg=$_POST["imgsrc"];
        $stylecons=$_POST["stylecons"];

        $database=new db();
        $this->db=$database->db;
        $this->db->query("update style set stylename='$stylename',styleimg='$styleimg',stylecons='$stylecons' where id=".$id);

       if ($this->db->affected_rows>0){
           header("location:/server/8.15/mvc/index.php/admin/content/int");
       }
    }


    //获得 弹框num具体数据
    function getnums(){
        $numid=$_GET["numid"];
        $database=new db();
        $this->db=$database->db;
        $reuqest=$this->db->query("select * from num where numid=".$numid);
        $row=$reuqest->fetch_assoc();
        echo json_encode($row);
    }
    //修改num
    function editnum(){
        $numid=$_POST["numid"];
        $numname=$_POST["numname"];
        $num=$_POST["num"];
        $database=new db();
        $this->db=$database->db;
        $this->db->query("update num set numname='$numname',num='$num' where numid=".$numid);
        if ($this->db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/content/int");
        }
    }
}