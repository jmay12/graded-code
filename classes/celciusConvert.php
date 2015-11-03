<?php

class celciusConvert {

function celConv($x) {
  if(is_numeric($x)) {
     $result = (($x-32) * (5/9));
    echo $result;
      return $result;

  } else {
    echo "Please enter a numeric value";
  }
}
}

?>