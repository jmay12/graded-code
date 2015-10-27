<?php

$num = $_POST['numerator'];
$denom = $_POST['denominator'];

function division($x,$y) {
  $result = $x / $y;
  return $result;
  }

echo "Answer is " . division($num,$denom) . ".";
echo "<br>";
echo "<a href = 'http://jmay12php-136229.nitrousapp.com/graded-code/index2.php'>Go Back </a>";

?>