<?php
use Tonmoy\Calculator\Basic\Calculator as BasicCalculator;
namespace Tonmoy\Calculator\Basic\Calculator;
class Calculator{
    public $number1=20;
    public $number2=10;
    function sum(){
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

$calculatorObj = new BasicCalculator();
echo "Basic Calculator <hr>";

echo "Sum: ".$calculatorObj -> sum()."<br>";
echo "Sub: ".$calculatorObj -> sub()."<br>";

