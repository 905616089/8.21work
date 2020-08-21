<?php


class engine
{
    //获取原始数据

    private $templateDir="template";
    private $compileDir="compile";
    private $cacheDir="cache";
    public $cache=false;


    private $array=array();


    private function getData($file){
        $destfile=$this->templateDir.$file;
        if(is_file($destfile)){

            return file_get_contents($destfile);
        }else{
            die("this template not find");
        }
    }
    public function  setTemplateDir($path){
        $this->templateDir=$path;
    }
    public function setCompileDir($path){
        $this->compileDir=$path;
    }
    public function setCacheDir($path){
        $this->cacheDir=$path;
    }
    private function compile($file){
        $con=$this->getData($file);
        $reg='/\{(\$[a-zA-Z]\w*)\}/';

        $one=preg_replace_callback($reg,function ($val){
            return "<?php echo ".$val[1]."?>";
            },$con);


        $reg1='/{foreach([^\}]*)\}/';
        $two=preg_replace_callback($reg1,function ($val){
            return '<?php foreach('.$val[1].'){?>';
        },$one);

        $reg2='/{\/foreach([^\}]*)\}/';

        $three=preg_replace_callback($reg2,function ($val){

            return "<?php  }?>";
        },$two);

        return $three;
    }
    function display($file){
        $result=$this->compile($file);
        $outFileName=$this->compileDir.basename($file,".html").".php";
        $inFileName=$this->templateDir.$file;
        $cacheFileName=$this->cacheDir.basename($file,".html").".htm";

        if($this->cache&&is_file($cacheFileName)){
            include_once $cacheFileName;
        }else{
            if(is_file($outFileName)&&filemtime($outFileName)>filemtime($inFileName)){
                foreach ($this->array as $k=>$v){
                    $$k=$v;
                }
                include_once $outFileName;
            }
            else{
                file_put_contents($outFileName,$result);

                foreach ($this->array as $k=>$v){
                    $$k=$v;
                }
                if($this->cache){
                    ob_start();
                    include_once $outFileName;
                    $con=ob_get_contents();
                    file_put_contents($cacheFileName,$con);
                    ob_end_flush();
                }else{
                    include_once $outFileName;
                }
            }


        }



    }

    function assign($attr,$val){
        $this->array[$attr]=$val;

    }

}

