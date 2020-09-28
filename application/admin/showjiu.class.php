<?php
if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;

class showjiu {
    function int(){
        $smarty=new smarty();

        $jid=$_GET["jid"];
        $database=new db();
        $this->db=$database->db;
        $others="";
        $this->getshop($data,$jid);
        $this->getother($others);
        $smarty->assign("data",$data);
        $smarty->assign("others",$others);
        $smarty->display("index/showjiu.html");
    }

    function getshop(&$data,$jid){
        $result=$this->db->query("select * from jiu where jid=".$jid);
        while ($row=$result->fetch_assoc()){
            $data='<div class="showdiv">
            <div class="showleft">
                <div class="showimg">
                    <img src="'.$row["jimg"].'" alt="">
                </div>
            </div>
            <div class="showright">
                <div class="showtitle">
                    <span>'.$row["jname"].'</span>
                </div>
                <img src="https://ccdn.goodq.top/caches/b2722f2617dd98e9cdb285b51047a21d/aHR0cHM6Ly81ZDdhMDE2MGIwZTdkLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDkvMzY4ZWVjOWEzNGU0NmIwYzY1MTFiMDEzZGRhMWE1MWQtOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp" alt="">

                <div class="showcons">
                    '.$row["jcons"].'
                </div>
                <div class="jval-1">
                    <div class="jtitle">
                        容量
                    </div>
                    <div class="jvals">
                        '.$row["jml"].'ml
                    </div>
                </div>
                <div class="jval-1">
                    <div class="jtitle">
                       酒精度
                    </div>
                    <div class="jvals">
                        '.$row["jvol"].'%vol
                    </div>
                </div>

                <div class="jval-1">
                    <div class="jtitle">
                       原麦汁浓度
                    </div>
                    <div class="jvals">
                        '.$row["jp"].'°P
                    </div>
                </div>

                <div class="jval-1">
                    <div class="jtitle">
                        价格
                    </div>
                    <div class="jvals">
                        ￥'.$row["jvales"].'
                    </div>
                </div>
                <button type="button" class="showbutton">联系我们</button>

            </div>
        </div>';
        }
    }
    function getother(&$others){
        $result=$this->db->query("select * from jiu limit 6");
        while ($row=$result->fetch_assoc()){
            $others.=' <div class="imgbox-img">
                    <a href="/server/8.15/mvc/index.php/admin/showjiu/int?jid='.$row["jid"].'" >
                    <img src="'.$row["jimg"].'" alt="" class="imglist-img" style="width: 400px;height: 400px">
                     <div class="imglist-text" >'.$row["jname"].'</div>
                    </a>
                </div>';
        }
    }


}