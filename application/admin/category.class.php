<?php
if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;

class category {

    public $arr=array();
    function int (){
        $smarty=new smarty();
        $database=new db();
        $this->db=$database->db;
        $str="";
//        $this->tree(0,$str);

        $this->jiuOption($str);
        $smarty->assign("data",$str);
        $smarty->display("admin/category.html");
    }
    function tree($pid=0,&$str,$i=0){
        $result=$this->db->query("select * from category where pid=".$pid);
        while ($row=$result->fetch_assoc()){
            $str.='<tr><td>'.($i+1).'级目录</td><td>'.str_repeat("->",$i).$row["cname"].'</td><td> <a href="javascript:;" attr="'.$row["id"].'" class="add">添加 </a>  <a href="javascript:;" attr="'.$row["id"].'" pid="'.$row["pid"].'"  class="edit">修改 </a>  <a href="/server/8.15/mvc/index.php/admin/category/del?id='.$row["id"].'" attr="'.$row["id"].'" class="remove">删除 </a></td></tr>';
            $this->tree($row["id"],$str,$i+1);
        }
    }
//获取酒
    function jiuOption(&$str){
        $result=$this->db->query("select * from jform");
        while ($row=$result->fetch_assoc()){
            $str.='<tr attr="'.$row["jid"].'"><td>'.$row["jname"].'</td> <td>'.$row["jimg"].'</td><td>'.$row["jcons"].'</td><td>'.$row["jval"].'</td><td><a href="/server/8.15/mvc/index.php/admin/category/editshow?jid='.$row["jid"].'" attr="'.$row["jid"].'" class="edit">修改</a>  <a href="/server/8.15/mvc/index.php/admin/category/deljiu?jid='.$row["jid"].'" attr="'.$row["jid"].'" class="remove">删除</a></td></tr>';
        }
    }


    //删除酒
    function deljiu(){
        $jid=$_GET["jid"];
        $database=new db();
        $this->db=$database->db;

        $this->db->query("delete from jform where jid=".$jid);
            if($this->db->affected_rows>0){
                header("localhost:/server/8.15/mvc/index.php/admin/category/int");
            }

    }
    function  editcon(){
        $cname=$_GET["cname"];
        $pid=$_GET["pid"];
        $id=$_GET["id"];
        $database=new db();
        $this->db=$database->db;
        $this->db->query("update category set cname='{$cname}',pid='{$pid}' where id=".$id);

        if($this->db->affected_rows>0){
            echo "ok";
        }

    }

    function getOption(){
        $this->treeOption(0,$this->arr);

        echo json_encode($this->arr);
    }

    function treeOption($pid,&$arr){
        $database=new db();
        $this->db=$database->db;
        $result=$this->db->query("select * from category where pid=".$pid);
        $i=0;
        while ($row=$result->fetch_assoc()){
            $arr[$i]=array(
                "cname"=>$row["cname"],
                "id"=>$row["id"],
                "pid"=>$row["pid"]
            );
            $this->treeOption($row["id"],$arr[$i]["child"]);
            $i++;
        }
    }

    //酒show
    function showjiu(){
        $jid=$_GET["jid"];
        $database=new db();
        $this->db=$database->db;
        $request=$this->db->query("select * from jform where jid=".$jid);
        $row=$request->fetch_assoc();
        echo json_encode($row);
    }


    //添加酒
    function addjiu(){
        $smarty=new smarty();
        $smarty->display("admin/addjiu.html");



//        $jname=$_POST["jname"];
//        $jcons=$_POST["jcons"];
//        $jval=$_POST["jval"];
//        $jimg=$_POST["jimg"];
//        $database=new db();
//        $db=$database->db;
//        $db->query("insert into jform (jname,jcons,jval,jimg) values ('$jname','$jcons','$jval','$jimg')");
//
//        if($db->affected_rows>0){
//            header("location:/server/8.15/mvc/index.php/admin/category/int");
//        }

    }
    function jiuadd(){

        $jname=$_POST["jname"];
        $jcons=$_POST["jcons"];
        $jval=$_POST["jval"];
        $jimg=$_POST["imgsrc"];
        $database=new db();
        $db=$database->db;
        $db->query("insert into jform (jname,jcons,jval,jimg) values ('$jname','$jcons','$jval','$jimg')");

        if($db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/category/int");
        }
    }





//编辑酒
    function editshow(){
        $jid= $_GET["jid"];
        $database=new db();
        $db=$database->db;
        $request=$db->query("select * from jform where jid=".$jid);
        $row=$request->fetch_assoc();
        $jval=explode(",",$row["jval"]);
        $smarty=new  smarty();
        $smarty->assign("data",$row);
        $smarty->assign("jval",$jval);
        $smarty->display("admin/editjiu.html");
    }


    function editjiu(){
       $jid=$_POST["jid"];
       $jimg=$_POST["imgsrc"];
       $jcons=$_POST["jcons"];
       $jname=$_POST["jname"];
       $jval=$_POST["jval"];
        $database=new db();
        $db=$database->db;
        $db->query("update jform set jname='{$jname}',jimg='{$jimg}',jcons='{$jcons}',jval='{$jval}' where jid=".$jid);
        if($db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/category/int");
        }
    }

    //上传图片
    function uploadimg(){
        $up=new upload();
        $up->up();
        echo $up->fullpath="http://localhost/server/8.15/mvc/".$up->fullpath;
    }
}