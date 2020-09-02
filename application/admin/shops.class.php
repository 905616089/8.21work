<?php
if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;

class shops{
    function int(){
        $smarty=new smarty();
        $data="";
        $database=new db();
        $this->db=$database->db;
        $this->getshops($data);
        $smarty->assign("data",$data);
        $smarty->display("admin/shops.html");
    }

    private function getshops(&$data){
        $request=$this->db->query("select * from jiu");
        while ($row= $request->fetch_assoc()){
            $data.=' <tr><td  style=\'width:16.7%;\'>'.$row["jid"].'</td>
            <td  style=\'width:16.7%;\'>'.$row["jname"].'</td>
            <td  style=\'width:16.7%;\'><img src='.$row["jimg"].' width="35px"></td>
            <td  style=\'width:16.7%;\'>'.$row["jcons"].'</td>
            <td style=\'width: 16.7%;\'>'.$row["jvales"].'</td>
            <td  style=\'width:16.7%;\'>'.$row["jml"].'ml</td>
            <td style=\'width: 16.7%;\'>'.$row["jvol"].'vol</td>
            <td style=\'width: 16.7%;\'>'.$row["jp"].'°P</td>';
        }
    }
}