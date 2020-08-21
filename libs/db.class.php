<?php
namespace libs;
class db{
    function __construct()
    {
        global $config;
        $host=isset($config["database"]["host"])? $config["database"]["host"]:"localhost";
        $user=isset($config["database"]["user"])? $config["database"]["user"]:"root";
        $password=isset($config["database"]["password"])? $config["database"]["password"]:"";
        $dataname=isset($config["database"]["dataname"])? $config["database"]["dataname"]:"wui2006";
        $port=isset($config["database"]["port"])? $config["database"]["port"]:"3308";

       $db=new \mysqli($host,$user,$password,$dataname,$port);
       if(mysqli_connect_error()){
           die("shujukushibai");
       }
       $db->query("set name utf8");
       $this->db=$db;
    }

}