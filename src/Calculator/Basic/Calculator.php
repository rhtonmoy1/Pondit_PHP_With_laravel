<?php

namespace Tonmoy\Calculator\Basic\Calculator;
class Claculator{
    public $number1;
    public $number2;
    function sum(){
        return $this.number1 + $this.number2;
    }
    function sub(){
        return $this.number1 - $this.number2;
    }
    function mul(){
        return $this.number1 * $this.number2;
    }
    function div(){
        return $this.number1 / $this.number2;
    }
}


