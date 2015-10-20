<?php
error_reporting(E_ALL);

$num = $_POST['numerator'];
$denom = $_POST['denominator'];

if (is_numeric($num) && is_numeric($denom))
{
  echo "You passed the test";
  echo "<br>";
  echo "<a href = 'http://jmay12php-136229.nitrousapp.com/graded-code/index2.php'>Go Back </a>";
}
else
{
  echo "Go back and correct your input";

  echo "<a href = 'http://jmay12php-136229.nitrousapp.com/graded-code/index2.php'>Go Back </a>";
}

?>