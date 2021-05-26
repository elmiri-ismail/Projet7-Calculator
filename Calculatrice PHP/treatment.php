<?php 
  require "class.php";

  //intializing varibales
$x = null;
$operation = null;
$y = null;
$display = null;
$number = null;
$result = null;
//values of inputes 
if(isset($_POST["x"])) $x = $_POST["x"];
if(isset($_POST["op"])) $operation = $_POST["op"];
if(isset($_POST["y"])) $y = $_POST["y"];

//add number 
if(isset($_POST["nb"])){
    $number = $_POST["nb"];
    if ($x == null) $x = $number;
    elseif($x != null && $operation == null) $x .= $number;
    elseif($operation != null) $y .= $number;
} 

//add operator
if(isset($_POST["op"])){
    if ($x != null && $operation == null) {
        $operation = $_POST["op"];
    }
}

$calculatrice = new Calculator($x, $operation, $y);

//equal button 
if(isset($_POST["equal"])){
    $result = $calculatrice->compute();
}

// display
if($result != null) $display = $result;
else{
    if($x != null) $display .= $x;
    if($operation != null) $display .= $operation;
    if($y != null) $display .= $y;
}

//clear 
if(isset($_POST["C"])){
    $x = null;
    $operation = null;
    $y = null;
    $display = "";
    $number = null;
    $result = null; 
}
?>