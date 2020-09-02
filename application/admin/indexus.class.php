<?php

if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\code;
use \libs\cookie;

class indexus{
    function int(){
        $smarty=new smarty();
        $data="";
        $str="";
        $database=new db();
        $this->db=$database->db;
        $this->getus($data);
        $this->getmessage($str);
        $smarty->assign("data",$data);
        $smarty->assign("message",$str);
        $smarty->display("index/us.html");

    }

    private function  getus(&$data){
        $request=$this->db->query("select * from usmessage");

        while($row=$request->fetch_assoc()){
        $data.='<div class="lists1-div">
                        <div class="div-title">
                            '.$row["storename"].'
                        </div>
                        <div class="div-title1">
                            电话：'.$row["tel"].'
                        </div>
                        <div class="div-title1">
                            邮箱：'.$row["email"].'</div>

                        <div class="div-title1">地址： '.$row["address"].'</div>
                    </div>';
        }
    }
    private function getmessage(&$str)
    {
        $request = $this->db->query("select * from us");

        while ($row = $request->fetch_assoc()) {

            $str.= ' <div class="lists1-title1">
                       
                        <div class="title1-text2">
                            '.$row["usname"].'
                        </div>
                    </div>
                    <div class="lists-title2">
                       '.$row["uscons"].'
                    </div>';

        }
    }
}