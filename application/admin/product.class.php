<?php
if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;
use \libs\pages;

class product{
    function int(){
        $smarty=new smarty();
        $style="";
        $num="";
        $recommend="";
        $database=new db();
        $this->db=$database->db;

        $this->getnum($num);
        $this->getdata($style);
        $this->recommend($recommend);
        $smarty->assign("num",$num);
        $smarty->assign("style",$style);
        $smarty->assign("recommend",$recommend);

        $smarty->display("index/product.html");
    }

    private function getdata(&$style){

        $result=$this->db->query("select * from style");
        while ($row=$result->fetch_assoc()){
        $style.='<div class="img2_2">
                    <div class="img2-center-icon">
                        <img src='.$row["styleimg"].' alt="" >
                        <span style="font-size:24px;font-weight:bold; ">'.$row["stylename"].'</span>
                    </div>
                    <div class="img2-title">
                        '.$row["stylecons"].'
                    </div>
                    </div>';


        }
    }

    private function getnum(&$num){

        $result=$this->db->query("select * from num");
        while ($row=$result->fetch_assoc()){
            $num.=' <div class="number-container-block">
                    <div class="num-value" num='.$row["num"].'></div>
                    <div class="num-title">
                        '.$row["numname"].'
                    </div>
                </div>';
        }
    }

    private function getjiu(&$jiu){


        $result=$this->db->query("select * from jiu");
        while ($row=$result->fetch_assoc())
        {
            $jiu.='<div class="center-list">
                            <div class="center-list-img">
                                <img src="https://ccdn.goodq.top/caches/b2722f2617dd98e9cdb285b51047a21d/aHR0cHM6Ly81ZDdhMDE2MGIwZTdkLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDkvNTI4YzliODc2ZmNjYTE5ODQwODZkN2VkNGQ5OWMyNDMtOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp" alt="">

                            </div>
                            <div class="center-list-title">
                                <div class="list-title-div">
                                    <span class="span1">传世</span>
                                    <span class="span2">麦香</span>
                                </div>
                                <img src="https://ccdn.goodq.top/caches/b2722f2617dd98e9cdb285b51047a21d/aHR0cHM6Ly81ZDdhMDE2MGIwZTdkLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDkvMzY4ZWVjOWEzNGU0NmIwYzY1MTFiMDEzZGRhMWE1MWQtOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp" alt="">
                                <div class="list-title-content">
                                    当今最领先的响应式自助建站平台，我们的流线式网页布局设计方案和可视化图文内容编辑模式让网站制作和维护成为一件轻松惬意的事。
                                </div>


                                <img src="https://ccdn.goodq.top/caches/b2722f2617dd98e9cdb285b51047a21d/aHR0cHM6Ly81ZDdhMDE2MGIwZTdkLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDkvZjg2ZDE3Y2JjMDZjMWMwY2EwOTc3ODRjMTIxYzc4NmUtOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp" alt="">
                            </div>
                        </div>';
        }

    }
    private function recommend(&$recommend){
        $result=$this->db->query("SELECT * FROM jiu,recommend as re WHERE jiu.jid=re.recommendid");
        while ($row=$result->fetch_assoc()){
            $recommend.='<div class="center-list">
                            <div class="center-list-img">
                                <img src='.$row["jimg"].' alt="">

                            </div>
                            <div class="center-list-title">
                                <div class="list-title-div">
                                   
                                    <span class="span2">'.$row["jname"].'</span>
                                </div>
                                <img src="https://ccdn.goodq.top/caches/b2722f2617dd98e9cdb285b51047a21d/aHR0cHM6Ly81ZDdhMDE2MGIwZTdkLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDkvMzY4ZWVjOWEzNGU0NmIwYzY1MTFiMDEzZGRhMWE1MWQtOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp" alt="">
                                <div class="list-title-content">
                                    '.$row["jcons"].'
                                </div>


                                  <div class="jiuvale">$'.$row["jvales"].'</div>
                            </div>
                        </div>';
        }

    }

}