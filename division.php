<?php

$num = $_POST['numerator'];
$denom = $_POST['denominator'];

function division($x,$y)
  {
  $z = $x / $y;
  return $z;
  }

echo "Answer is " . division($num/$denom);

?>