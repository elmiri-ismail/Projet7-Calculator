<?php 
class Calculator{
   private $x; 
   private $operation; 
   private $y; 

    function __construct($x, $operation, $y){
        $this->x = $x;
        $this->operation = $operation ;
        $this->y = $y;
    }

   function compute(){
    $result = null;
    $n1 = floatval($this->x);
    $n2 = floatval($this->y);
    switch ($this->operation) {
        case '+':
            $result = $n1 + $n2;
            break;
        case '*':
            $result = $n1 * $n2;
            break;
        case '-':
            $result = $n1 - $n2;
            break;
        case '÷':
            $result = $n1 / $n2;
            break;
        default:
           return;
    }
    return $result;
 } 
}
?>