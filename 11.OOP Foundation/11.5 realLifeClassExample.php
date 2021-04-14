<?php

// Real Life Class Example:

class RGB{
    private $color; // #ff2500
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode = ''){
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    // getter
    public function getColor(){
        return $this->color;
    }

    // getter rgb color
    public function getRGBColor(){
        return array($this->red, $this->green, $this->blue);
    }

    public function readRGBColor(){
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}\n";
    }

    // setter
    public function setColor($colorCode){
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    private function parseColor(){
        if($this->color){
//            $colors = sscanf($this->color, "%02x%02x%02x");
//            print_r($colors);
            list($this->red, $this->green, $this->blue) = sscanf($this->color, "%02x%02x%02x");
            echo $this->red . "\n";
            echo $this->green . "\n";
            echo $this->blue . "\n";
        }
        else{
            list($this->red, $this->green, $this->blue) = array(0,0,0,);
        }

    }

    public function getRed(){
        return $this->red;
    }

    public function getGreen(){
        return $this->green;
    }

    public function getBlue(){
        return $this->blue;
    }
}

$rgbObj = new RGB("#ff2e3b");
$rgbObj->readRGBColor();
echo $rgbObj->getBlue();