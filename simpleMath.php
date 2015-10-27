<?php

class simpleMath {

  function add($x,$y) {
  $result = $x + $y;
  return $result;
  }

  function subtract($x,$y) {
  $result = $x - $y;
  return $result;
  }

  function multiply($x,$y) {
  $result = $x * $y;
  return $result;
  }

  function division($x,$y) {
  $result = $x / $y;
  return $result;
  }

 function curCnv($to, $from){
    $returnValue = "";
    $currencies = array('USD', 'EUR');
    $rates = array(1.10,0.89);
    
    
    // Check for type array first
    if(is_array($to) && is_array($from)){
        // Check for correct currency type in element 1
        if(in_array($to[1], $currencies) && in_array($from[1],$currencies)){
             if(is_numeric($from[0])){
                 $key = array_search($to[1],$currencies);
                 $returnValue = $from[0] * $rates[$key];
             } else {
                 $returnValue = "Currency value is not numeric.";
             }
        } else {
             $returnValue = "Currency not supported.";
        }
      
    } else {
      $returnValue = "Failed parameter is not an array.";
    }
    return $returnValue;
  }
}


?>