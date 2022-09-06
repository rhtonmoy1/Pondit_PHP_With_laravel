<?php
// instance of class
include_once './src/Calculator/Basic/Calculator.php';
include_once './src/Calculator/Scientific/Calculator.php';

// include_once './vendor/autoload.php';

// use \Tonmoy\Calculator\Basic\Calculator as BasicCalculator;
// use \Tonmoy\Calculator\Scientific\Calculator as ScientificCalculator;

use \Tonmoy\Calculator\Basic\Calculator as BasicCalculator;
use \Tonmoy\Calculator\Scientific\Calculator as ScientificCalculator;

$calculatorObj = new BasicCalculator(30,10);
echo "Basic Calculator <hr>";

echo "Sum: ".$calculatorObj -> sum()."<br>";
echo "Sub: ".$calculatorObj -> sub()."<br>";

echo "<hr> Scientific Calculator <hr>";

$calculatorObj = new ScientificCalculator(90,20);
echo "Mul: ".$calculatorObj -> mul()."<br>";


