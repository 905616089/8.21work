<?php
namespace libs;
class smarty{

    function __construct()
    {
        global $config;

        $smarty=new \Smarty();
        $template=isset($config["smarty"]["template"])? $config["smarty"]["template"]:TEMPLATE_PATH;
        $compile=isset($config["smarty"]["compile"])? $config["smarty"]["compile"]:COMPILE_PATH;
        $cache=isset($config["smarty"]["cache"])? $config["smarty"]["cache"]:CACHE_PATH;

        echo $config["smarty"]["template"];
        echo $template;
        $smarty->setCacheDir($cache);
        $smarty->setCompileDir($compile);
        $smarty->setTemplateDir($template);

        $this->smarty=$smarty;
    }
    function assign($attr,$val){
        $this->smarty->assign($attr,$val);
    }
    function display($file){
        echo $file;
        $this->smarty->display($file);
    }
}