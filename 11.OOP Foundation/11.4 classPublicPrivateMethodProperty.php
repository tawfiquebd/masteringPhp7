<?php

// Class access modifier . Public, Private, Protected
// Public property/method can be accessed from outside of the class. But private
// method and property can't be accessed directly. Private Class property can be
// access by same class method, Also same as private method can be accessed by
// same class method.

class Fund{

    private $fund;  // private property

    public function __construct($initialFund){
        $this->fund = $initialFund;
    }
    public function addMoney($money){
        $this->fund += $money;
        $this->deductMoney(0);  // private method accessing
    }
    public function deductMoney($money){
        $this->fund -= $money;
    }
//    private function deductMoney($money){
//        $this->fund -= $money;
//    }
    public function getDetailsFund(){
        echo "Total fund is: {$this->fund} \n";
    }

}

$fundObj = new Fund(100);
//$fundObj->fund = 50;  // directly accessing!! So, the property should be private
$fundObj->addMoney(10);
$fundObj->getDetailsFund();
$fundObj->deductMoney(7);
//$fundObj->deductMoney(7);
$fundObj->getDetailsFund();