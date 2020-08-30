<?php

if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;

class demo{
    function int(){
        $smarty=new smarty();
        $database=new db();
        $this->db=$database->db;
        $str="";
        $num=array();
        $this->getdata($str,$num);
     ;
        $smarty->assign("data",$str);
        $smarty->assign("num",$num);
//
        $smarty->display("index/demo.html");
    }

    private function getdata(&$str,&$num){
        $result=$this->db->query("select * from jform");
        while ($row=$result->fetch_assoc()){
            $jval=explode(",",$row["jval"]);
            $num[]="1";
            $str.='<div class="container">
        <div class="container-img">
            <div class="container-left">
                <div class="container-left-content">
                    <div class="title">
                        <span>'.$row["jname"].'</span>
                    </div>
                    <div class="title">
                        <img src="https://ccdn.goodq.top/caches/b2722f2617dd98e9cdb285b51047a21d/aHR0cHM6Ly81ZDdhMDE2MGIwZTdkLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDkvOGM5MTFmZDA2YTg4ZTk1NWE3ZDMwODZmMzg3Mzk1MTItOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp"
                            alt="" class="title-img">
                    </div>
                    <div class="title">
                        <div class="content-title">
                            '.$row["jcons"].'
                        </div>


                    </div>
                </div>

            </div>
            <div class="container-center">
                <img src="'.$row["jimg"].'"
                    alt="">
            </div>
            <div class="container-right">';
            $jvals="";
            for ($i=0;$i<count($jval);$i++){
            $jvals.='<div class="container-rihght-img">
                    <img src="'.$jval[$i].'" alt="">
                </div>';
        }
            $str.= $jvals.' </div>
        </div>
    </div>';


        }

    }
}