<?php
//instance of class
include_once './vendor/autoload.php';

use Tonmoy\Calculator\Basic\Calculator as BasicCalculator;
use Tonmoy\Calculator\Scientific\Calculator as ScientificCalculator;




$calculatorObj = new BasicCalculator(20,10);

echo "Basic Calculator <hr>";

echo "Sum: ".$claculatorObk -> sum()."<br>";
echo "Sub: ".$claculatorObk -> sub()."<br>";

echo "Basic Calculator <hr>";
$calculatorObj = new ScientificCalculator(20,10);
echo "Mul: ".$claculatorObk -> mul()."<br>";
echo "Div: ".$claculatorObk -> div()."<br>";