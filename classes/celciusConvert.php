<?php

$num = $_POST['entry'];

class celciusConvert {

function celciusConvert($x) {
  if(isnumeric($x)) {
     $result = (($x-32) * (5/9));
      return $result;

  } else {
    echo "Please enter a numeric value";
  }
}
}

echo "Answer is " . celciusConvert($num) . ".";
echo "<br>";
echo "<a href = 'http://jmay12php-136229.nitrousapp.com/graded-code/classes/index.php'>Go Back </a>";

?>