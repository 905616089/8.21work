<?php
if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;


class phone
{
    function int(){
        $smarty= new smarty();
        $database=new db();
        $this->db=$database->db;
        $str="";
        $num=array();
        $this->getinit($str,$num);
        $smarty->assign("data",$str);
        $smarty->display("index/phonedemo.html");
    }
    function getinit(&$str,&$num){
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
            </div>
        </div>';
    }
    }
    function boke(){
        $smarty= new smarty();
        $database=new db();
        $this->db=$database->db;
        $data="";
        $this->getboke($data);
        $smarty->assign("data",$data);
        $smarty->display("index/phoneboke.html");
    }
    function getboke(&$data){
        $result=$this->db->query("select * from bokecontent");
        while ($row=$result->fetch_assoc()){
            $data.=' <div class="imglist-div">
                            <img src="'.$row["img"].'"
                                alt="">
                            <div class="img-text">
                                <div class="img-text-title1">
                                    '.$row["title"].'
                                </div>
                                <div class="img-text-title2">
                                    '.$row["date"].'
                                </div>
                            </div>
                        </div>';
        }
    }


    function center(){
        $smarty= new smarty();
        $database=new db();
        $smarty->display("index/phonecenter.html");
    }
    function product(){
        $smarty= new smarty();
        $database=new db();
        $this->db=$database->db;
        $message="";
        $value="";
        $product="";
        $this->getproduct($message,$value,$product);
        $smarty->assign("message",$message);
        $smarty->assign("value",$value);
        $smarty->assign("product",$product);
        $smarty->display("index/phoneproduct.html");
    }
    function getproduct(&$message,&$value,&$product)
    {
        $result = $this->db->query("select * from style");
        while ($row = $result->fetch_assoc()) {
            $message .= '<div class="img2">
                    <div class="img2-center">
                        <div class="img2-center-icon">
                            <img src=' . $row["styleimg"] . ' alt="" >
                            <span style="font-size:24px;font-weight:bold;line-height: 0.6rem">' . $row["stylename"] . '</span>
                        </div>

                        <div class="img2-title">
                            ' . $row["stylecons"] . '
                        </div>
                    </div>
                </div>';
        }

        $result = $this->db->query("select * from num");
        while ($row = $result->fetch_assoc()) {
            $value .= ' <div class="number-container-block">
                    <div class="num-value" num=' . $row["num"] . '></div>
                    <div class="num-title">
                        ' . $row["numname"] . '
                    </div>
                </div>';
        }

        $result = $this->db->query("SELECT * FROM jiu,recommend as re WHERE jiu.jid=re.recommendid");
        while ($row = $result->fetch_assoc()) {
            $product .= '<div class="center-list">
                            <div class="center-list-img">
                                <img src=' . $row["jimg"] . ' alt="">

                            </div>
                            <div class="center-list-title">
                                <div class="list-title-div">
                                   
                                    <span class="span2">' . $row["jname"] . '</span>
                                </div>
                                <img src="https://ccdn.goodq.top/caches/b2722f2617dd98e9cdb285b51047a21d/aHR0cHM6Ly81ZDdhMDE2MGIwZTdkLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDkvMzY4ZWVjOWEzNGU0NmIwYzY1MTFiMDEzZGRhMWE1MWQtOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp" alt="">
                                <div class="list-title-content">
                                    ' . $row["jcons"] . '
                                </div>


                                  <div class="jiuvale">$' . $row["jvales"] . '</div>
                            </div>
                        </div>';

        }
    }

    function us(){
        $smarty= new smarty();
        $database=new db();
        $this->db=$database->db;
        $str="";
        $data="";
        $this->getus($str,$data);
        $smarty->assign("datas",$data);
        $smarty->assign("message",$str);
        $smarty->display("index/phoneus.html");
    }
    function getus(&$str,&$data){
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
}