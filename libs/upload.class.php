<?php
namespace libs;
class upload{
    public $filesize;
    public $filrType=array("image/png","image/jpeg","image/gif","image/jpg");
    public $filename="file";
    public $dafaulrDir="upload";
    public $fullpath;

    function __construct()
    {
        $this->filesize=1024*1024*5;
    }
    private function accept(){
        $this->data=$_FILES[$this->filename];
    }

    private function check(){
        if(is_uploaded_file($this->data["tmp_name"])){
            if(!$this->data["size"]<$this->filesize){

                if(in_array($this->data["type"],$this->filrType)){
                    return true;
                }else{
                    echo "文件类型不符";
                }

            }else{
                echo "文件太大";
                return false;
            }
        }else{
            echo "文件不合法";
            return false;
        }
    }
    private function creatDir(){

    if(!is_dir($this->dafaulrDir)){
        mkdir($this->dafaulrDir,0777,true);
    }
    $currentDir=$this->dafaulrDir.DIRECTORY_SEPARATOR."/".date("Y-m-d");
    if(!is_dir($currentDir)){
        mkdir($currentDir,0777,true);

    }
    $filename=time().mt_rand(1000,200000).$this->data["name"];

    $this->fullpath=$currentDir.DIRECTORY_SEPARATOR."/".$filename;



}
private function move(){
        move_uploaded_file($this->data["tmp_name"],$this->fullpath);
}

    function up(){
        $this->accept();
        if($this->check()){
            $this->creatDir();
            $this->move();
        }
    }

}
