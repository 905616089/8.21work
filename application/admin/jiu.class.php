<?php
if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;

class jiu {
    function int(){
        $smarty=new smarty();
        $database=new db();
        $this->db=$database->db;
        $str="";
        $this->getjiu($str);
//        var_dump($str);
//        exit();
        $smarty->assign("data",$str);
        $smarty->display("admin/jiu.html");
    }

    private function getjiu(&$str){
        $request=$this->db->query("select * from jiu");
        while ($row= $request->fetch_assoc()){
            $str.=' <tr><td  style=\'width:16.7%;\'>'.$row["jid"].'</td>
            <td  style=\'width:16.7%;\'>'.$row["jname"].'</td>
            <td  style=\'width:16.7%;\'><img src='.$row["jimg"].' width="35px"></td>
            <td  style=\'width:16.7%;\'>'.$row["jcons"].'</td>
            <td style=\'width: 16.7%;\'>'.$row["jvales"].'</td>
            <td style="width: 16.7%;"><a href="/server/8.15/mvc/index.php/admin/jiu/edit?jid='.$row["jid"].'" jid="'.$row["jid"].'"  class="edit">修改 </a>  <a href="/server/8.15/mvc/index.php/admin/jiu/del?jid='.$row["jid"].'" attr="'.$row["jid"].'" class="remove">删除 </a></td></tr>';
        }
    }
    function edit(){
        $smarty=new smarty();
        $jid=$_GET["jid"];
        $database=new db();
        $this->db=$database->db;
        $request=$this->db->query("select * from jiu where jid=".$jid);
        $row=$request->fetch_assoc();
        $smarty->assign("row",$row);
        $smarty->display("admin/editjius.html");


    }
    function editjiu(){

        $jid=$_POST["jid"];
        $jname=$_POST["jname"];
        $jimg=$_POST["imgsrc"];
        $jvales=$_POST["jvales"];
        $jcons=$_POST["jcons"];

        $database=new db();
        $this->db=$database->db;
        $this->db->query("update jiu set jname='$jname',jimg='$jimg',jvales='$jvales',jcons='$jcons' where jid=".$jid);

        if($this->db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/jiu/int");
        }


    }
    function del(){
        $jid=$_GET["jid"];
        $database=new db();
        $this->db=$database->db;
        $this->db->query("delete from jiu where jid=".$jid);
        if($this->db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/jiu/int");
        }
    }
    function addjiu(){
        $smarty=new smarty();
        $smarty->display("admin/addjius.html");
    }
    function addjius(){
        $jname=$_POST["jname"];
        $jimg=$_POST["imgsrc"];
        $jvales=$_POST["jvales"];
        $jcons=$_POST["jcons"];
        $database=new db();
        $this->db=$database->db;
        $this->db->query("insert into jiu (jname,jcons,jvales,jimg) values ('$jname','$jcons','$jvales','$jimg')");

        if($this->db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/jiu/int");
        }
    }




}