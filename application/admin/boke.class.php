<?php
if(!defined("MVC")){
//    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;

class boke{
    function int(){
        $smarty= new smarty();
        $str="";

        $database=new db();
        $this->db=$database->db;
        $this->tree(0,$str);
        $smarty->assign("data",$str);
        $smarty->display("admin/boke.html");
    }

    function tree($pid=0,&$str,$i=0){
        $result=$this->db->query("select * from boke where pid=".$pid);
        if($i==1){
            $type="子内容";
        }else{
            $type="分类";
        }
        while ($row=$result->fetch_assoc()){
            if($i==0){
                $str.='<tr><td>'.$type.'</td><td>'.str_repeat("->",$i).$row["cname"].'</td><td> <a href="/server/8.15/mvc/index.php/admin/boke/add?cid='.$row["cid"].'" attr="'.$row["cid"].'" class="add">添加博客 </a>  <a href="/server/8.15/mvc/index.php/admin/boke/edit?cid='.$row["cid"].'" attr="'.$row["cid"].'" pid="'.$row["pid"].'"  class="edit">修改 </a>  <a href="/server/8.15/mvc/index.php/admin/boke/del?cid='.$row["cid"].'" attr="'.$row["cid"].'" class="remove">删除 </a></td></tr>';
                $this->tree($row["cid"],$str,$i+1);
            }else if($i==1){
                $str.='<tr><td>'.$type.'</td><td>'.str_repeat("->",$i).$row["cname"].'</td> <td> <a href="/server/8.15/mvc/index.php/admin/boke/edit?cid='.$row["cid"].'"  attr="'.$row["cid"].'" pid="'.$row["pid"].'"  class="edit">修改 </a>  <a href="/server/8.15/mvc/index.php/admin/boke/del?cid='.$row["cid"].'" attr="'.$row["cid"].'" class="remove">删除 </a></td></tr>';
                $this->tree($row["cid"],$str,$i+1);
            }
        }
    }


    function addtype(){
        $smarty=new smarty();

        $smarty->display("admin/addtype.html");
    }
    function addtypes(){
        $cname=$_POST["cname"];
        $database=new db();
        $this->db=$database->db;
        $this->db->query("insert into boke (cname,pid) values ('$cname',0)");
        if($this->db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/boke/int");
        }

    }

    function del(){
        $cid=$_GET["cid"];
        $database=new db();
        $this->db=$database->db;
        $result=$this->db->query("select * from boke where pid=".$cid);
        $row=$result->fetch_assoc();
        if(isset($row)){
            echo "<script>alert('请先删除子类');location.href='http://localhost/server/8.15/mvc/index.php/admin/boke/int';</script>";
        }else{
            $this->db->query("delete  from boke where cid=".$cid);
            $this->db->query("delete  from bokecontent where cid=".$cid);
            if($this->db->affected_rows>0){
                header("location:/server/8.15/mvc/index.php/admin/boke/int");
            }
        }
    }

    function edit(){
        $smarty=new smarty();
        $cid=$_GET["cid"];
        $database=new db();
        $this->db=$database->db;
        $request=$this->db->query("select * from boke where cid=".$cid);
        $row=$request->fetch_assoc();
        if($row["pid"]==0){
            $smarty->assign("data",$row);
            $smarty->display("admin/edittype.html");
        }else{
            $request=$this->db->query("select * from bokecontent where cid=".$cid);
            $row=$request->fetch_assoc();
            $smarty->assign("data",$row);
            $smarty->display("admin/editboke.html");
        }
    }

    function edittype(){
        $cid=$_POST["cid"];
        $cname=$_POST["cname"];
        $database=new db();
        $this->db=$database->db;
        $this->db->query("update boke set cname='$cname' where cid='$cid'");
        if($this->db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/boke/int");
        }
    }

    function editboke(){
        $id=$_POST["id"];
        $cid=$_POST["cid"];
        $title=$_POST["title"];
        $img=$_POST["imgsrc"];
        $littlecons=$_POST["littlecons"];
        $cons=$_POST["cons"];
        $database=new db();
        $this->db=$database->db;
        $this->db->query("update bokecontent set title='$title',img='$img',littlecons='$littlecons',cons='$cons' where id='$id'");

        if($this->db->affected_rows>0){
            $this->db->query("update boke set cname='$title' where cid=".$cid);
            if($this->db->affected_rows>0){
                header("location:/server/8.15/mvc/index.php/admin/boke/int");
            }

        }

    }
    function add(){
        $cid=$_GET["cid"];
        $smarty=new smarty();
        $database=new db();
        $this->db=$database->db;
        $result=$this->db->query("select * from boke where cid=".$cid);
        $row=$result->fetch_assoc();
        $smarty->assign("row",$row);
        $smarty->display("admin/addtboke.html");
    }

    function addboke(){
        $smarty=new smarty();
        $database=new db();
        $this->db=$database->db;
        $str='';
        $result=$this->db->query("select * from boke where pid=0");
        while ($row=$result->fetch_assoc()){
            $str.='<option value="'.$row["cid"].'">'.$row["cname"].'</option>';
        }
        $smarty->assign("str",$str);
        $smarty->display("admin/addboke.html");
    }

    function addtboke(){
        $pid=$_POST["pid"];
        $title=$_POST["title"];
        $img=$_POST["imgsrc"];
        $littlecons=$_POST["littlecons"];
        $cons=$_POST["cons"];
        $database=new db();
        $this->db=$database->db;
        $this->db->query("insert into boke (cname,pid) values ('$title','$pid')");
        $result=$this->db->query("select * from boke order by cid DESC limit 1");
        $row=$result->fetch_assoc();
        $cid=$row["cid"];
        $this->db->query("insert into bokecontent (cid,title,img,littlecons,cons,pid) values ('$cid','$title','$img','$littlecons','$cons','$pid')");

        if($this->db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/boke/int");
        }
    }

    function addbokes(){
        $pid=$_POST["pid"];
        $title=$_POST["title"];
        $img=$_POST["imgsrc"];
        $littlecons=$_POST["littlecons"];
        $cons=$_POST["cons"];
        $database=new db();
        $this->db=$database->db;
        $this->db->query("insert into boke (cname,pid) values ('$title','$pid')");
        $result=$this->db->query("select * from boke order by cid DESC limit 1");
        $row=$result->fetch_assoc();
        $cid=$row["cid"];
        $this->db->query("insert into bokecontent (cid,title,img,littlecons,cons,pid) values ('$cid','$title','$img','$littlecons','$cons','$pid')");

        if($this->db->affected_rows>0){
            header("location:/server/8.15/mvc/index.php/admin/boke/int");
        }
    }




}