<?php
if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;

class center {
    function int (){
       $smarty= new smarty();
       $shops="";
        $database=new db();
        $this->db=$database->db;
        $this->getshops($shops);
        $smarty->assign("shops",$shops);
       $smarty->display("index/center.html");
    }
    function getshops(&$shops){
        $result=$this->db->query("select * from jiu limit 0,6");
        while ($row=$result->fetch_assoc()){

            $shops.='
                    <div class="imglist-div" >
    <a href="/server/8.15/mvc/index.php/admin/showjiu/int?jid='.$row["jid"].'" class="imglist-div-a">
                    <img src="'.$row["jimg"].'"
                        alt=""
                        other="https://ccdn.goodq.top/caches/b2722f2617dd98e9cdb285b51047a21d/aHR0cHM6Ly81ZDdhMDE2MGIwZTdkLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDkvNGIzNjJiODAyYzk2OTUxMTNkMDJmNzQ4Nzk4MDEyNGUtNTAweDUwMC05MC53ZWJw.webp">
                    <div class="imglist-title1" >
                        '.$row["jname"].'
                    </div>
                    <div class="imglist-title2" >READ MORE+</div>
                    </a>
                </div>
                ';
        }
    }
}