<?php
if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;
use \libs\pages;
class jiu {
    function int(){
        $sql="select *  from jiu where 1=1";
        if(isset($_POST["jids"])&&!empty($_POST["jids"])){
            $sql.=" and jid=".$_POST["jids"];
        }
        if(isset($_POST["jnames"])&&!empty($_POST["jnames"])){
            $sql.=" and jname like '%".$_POST["jnames"]."%'";
        }
        


        $smarty=new smarty();
        $database=new db();
        $this->db=$database->db;
        $str="";
        
        $pages=new pages();
        $result=$this->db->query($sql);
        $pages->total=$result->num_rows;

        $foot=$pages->show();
        $sql.=$pages->limit;



        $this->getjiu($str,$sql);
        $smarty->assign("data",$str);
        $smarty->assign("foot",$foot);
        $smarty->display("admin/jiu.html");
    }

    private function getjiu(&$str,$sql){

        $request=$this->db->query($sql);

        while ($row= $request->fetch_assoc()){
            $str.=' <tr><td  style=\'width:16.7%;\'>'.$row["jid"].'</td>
            <td  style=\'width:16.7%;\'>'.$row["jname"].'</td>
            <td  style=\'width:16.7%;\'><img src='.$row["jimg"].' width="35px"></td>
            <td  style=\'width:16.7%;\'>'.$row["jcons"].'</td>
            <td style=\'width: 16.7%;\'>'.$row["jvales"].'</td>
            <td  style=\'width:16.7%;\'>'.$row["jml"].'ml</td>
            <td style=\'width: 16.7%;\'>'.$row["jvol"].'vol</td>
            <td style=\'width: 16.7%;\'>'.$row["jp"].'°P</td>
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
        $jml=$_POST["jml"];
        $jvol=$_POST["jvol"];
        $jp=$_POST["jp"];

        $database=new db();
        $this->db=$database->db;

        $this->db->query("update jiu set jname='$jname',jimg='$jimg',jvales='$jvales',jcons='$jcons',jml='$jml',jvol='$jvol',jp='$jp' where jid='$jid'");


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
        $jml=$_POST["jml"];
        $jvol=$_POST["jvol"];
        $jp=$_POST["jp"];
        $database=new db();
        $this->db=$database->db;
        $this->db->query("insert into jiu (jname,jcons,jvales,jimg,jml,jvol,jp) values ('$jname','$jcons','$jvales','$jimg','$jml','$jvol','$jp')");

        if($this->db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/jiu/int");
        }
    }




}