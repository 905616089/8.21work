<?php
if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;

class indexboke{
    function int (){
        $smarty=new smarty();
        $database=new db();
        $this->db=$database->db;
        $data="";
        $type="";
        $news="";
        $this->getdata($data);
        $this->gettype($type);
        $this->newdata($news);
        $smarty->assign("news",$news);
        $smarty->assign("data",$data);
        $smarty->assign("type",$type);
        $smarty->display("index/boke.html");
    }
    private function getdata(&$data){
        $database=new db();
        $this->db=$database->db;
        $result=$this->db->query("select * from boke where pid=0 order by cid ASC limit 1");
        $row=$result->fetch_assoc();
        $cid=$row["cid"];
        $result=$this->db->query("select * from bokecontent where pid=".$cid);
        while ($row=$result->fetch_assoc()){
            $data.='<div class="left-main"  id="'.$row["id"].'">
                    <img src='.$row["img"].'
                        alt="" class="main-img">

                    <div class="main-title">
                        '.$row["title"].'
                    </div>
                    <div class="main-text">
                        '.$row["littlecons"].'
                    </div>
                    <div class="main-text2">
                        READ MORE +
                    </div>
                </div>';
        }
    }
    private  function gettype(&$type) {
        $database=new db();
        $this->db=$database->db;
        $result=$this->db->query("select * from boke where pid=0 order by cid ASC");

        while ( $row=$result->fetch_assoc()){
            $type.='<div class="right-title2">
                        <span class="title2-text" value='.$row["cid"].'>'.$row["cname"].'</span>
                    </div>';
        }

    }

    public function btn(){
        $pid=$_GET["pid"];
        $database=new db();
        $this->db=$database->db;
        $data='';
        $result=$this->db->query("select * from bokecontent where pid=".$pid);
        while ($row=$result->fetch_assoc()){
            $data.='<div class="left-main" id="'.$row["id"].'">
                    <img src='.$row["img"].'
                        alt="" class="main-img">

                    <div class="main-title" >
                        '.$row["title"].'
                    </div>
                    <div class="main-text">
                        '.$row["littlecons"].'
                    </div>
                    <div class="main-text2">
                        READ MORE +
                    </div>
                </div>';
        }
        echo $data;
    }
    function boke (){
        $id=$_GET["id"];
        $database=new db();
        $this->db=$database->db;
        $data='';
        $result=$this->db->query("select * from bokecontent where id=".$id);
        while ($row=$result->fetch_assoc()){
            $data='<div class="left-main1" id="'.$row["id"].'">
                    <img src='.$row["img"].'
                        alt="" class="main-img">

                    <h1>
                        '.$row["title"].'
                    </h1>
                    <div class="main-text">
                        '.$row["cons"].'
                    </div>
                  
                </div>';
        }
        echo $data;
    }

    function news (){
        $id=$_GET["id"];
        $database=new db();
        $this->db=$database->db;
        $data='';
        $result=$this->db->query("select * from bokecontent where id=".$id);
        while ($row=$result->fetch_assoc()){
            $data='<div class="left-main1" id="'.$row["id"].'">
                    <img src='.$row["img"].'
                        alt="" class="main-img">

                    <h1>
                        '.$row["title"].'
                    </h1>
                    <div class="main-text">
                        '.$row["cons"].'
                    </div>
                  
                </div>';
        }
        echo $data;
   }

    function newdata(&$news){
        $database=new db();
        $this->db=$database->db;
        $result=$this->db->query("select * from bokecontent order by date desc limit 3");
        while($row=$result->fetch_assoc()){
            $news.='<div class="imglist-div" id='.$row["id"].'>
                            <img src='.$row["img"].'
                                alt="">
                            <div class="img-text">
                                <div class="img-text-title1" >
                                   '.$row["title"].'
                                </div>
                                <div class="img-text-title2">
                                    发布日期：'.$row["date"].'
                                </div>
                            </div>
                        </div>';
        }
    }

}