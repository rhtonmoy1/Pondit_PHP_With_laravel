<?php

// namespace Tonmoy\Calculator\Scientific;
namespace Tonmoy\Calculator\Scientific;
class Calculator{
    
    
    //property
    public $number1;
    public $number2;

    public function __construct($n1, $n2){
        $this->number1 = $n1;
        $this->number2 = $n2;
    }

    //method
    function sum()   //parameter $n1, $n2
    {
        return $this->number1 + $this->number2;
    }
    function sub(){
        return $this->number1 - $this->number2;
    }
    function mul(){
        return $this->number1 * $this->number2;
    }
    function div(){
        return $this->number1 / $this->number2;
    }
}


