<?php

namespace libs;

class  code
{
    public $type = "png";
    public $width = 160;
    public $height = 50;
    public $codelength = 4;
    public $seed = "abcdefhjkmnprstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ345678";
    public $fontsize = array("min" => 20, "max" => 35);
    public $fontangle = array("min" => -15, "max" => 15);
    public $linenum = array("min" => 2, "max" => 4);
    public $linewidth = array("min" => 1, "max" => 4);
    public $pixnum = array("min" => 80, "max" => 100);


    private function createCanvas()
    {
        $this->image = imagecreatetruecolor($this->width, $this->height);
        imagefill($this->image, 0, 0, $this->setColor());
    }

    private function setColor($type = "background")
    {
        $r = $type == "background" ? mt_rand(0, 125) : mt_rand(126, 255);
        $g = $type == "background" ? mt_rand(0, 125) : mt_rand(126, 255);
        $b = $type == "background" ? mt_rand(0, 125) : mt_rand(126, 255);
        return imagecolorallocate($this->image, $r, $g, $b);
    }

    private function getText()
    {
        $str = "";
        for ($i = 0; $i < $this->codelength; $i++) {
            $str .= $this->seed[mt_rand(0, strlen($this->seed) - 1)];
        }
        return $str;
    }

    private function setText()
    {
        $str = $this->getText();
        $this->str=strtolower($str);
        for ($i = 0; $i < $this->codelength; $i++) {
            $size = mt_rand($this->fontsize["min"], $this->fontsize["max"]);
            $angle = mt_rand($this->fontangle["min"], $this->fontangle["max"]);
            $space = $this->width / ($this->codelength * 2 - 1);
            imagettftext($this->image, $size, $angle, mt_rand($space * $i, $space * max(($i * 2), 1)), 20, $this->setColor("a"), $_SERVER['DOCUMENT_ROOT']."/server/8.15/mvc/application/static/font/as.ttf ", $str[$i]);
        }


    }


    private function setLine()
    {
        $num = mt_rand($this->linenum["min"], $this->linenum["max"]);
        for ($i = 0; $i < $num; $i++) {
            $x1 = mt_rand(0, $this->width / 2);
            $x2 = mt_rand($this->width / 2, $this->width);

            $y1 = mt_rand(0, $this->height);
            $y2 = mt_rand(0, $this->height);

            imagesetthickness($this->image, mt_rand($this->linewidth["min"], $this->linewidth["max"]));
            imageline($this->image, $x1, $y1, $x2, $y2, $this->setColor("a"));
        }

    }

    private function setPix()
    {
        $num = mt_rand($this->pixnum["min"], $this->pixnum["max"]);
        for ($i = 0; $i < $num; $i++) {
            imagesetpixel($this->image, mt_rand(0, $this->width), mt_rand(0, $this->height), $this->setColor("a"));
        }
    }

    function out()
    {
        header("content-type:image/" . $this->type);
        $this->createCanvas();


        $this->setText();

        $this->setLine();
        $this->setPix();
        $_SESSION["code"]=$this->str;
        $outtype = "image".$this->type;
       $outtype($this->image);

        imagedestroy($this->image);
    }


}
