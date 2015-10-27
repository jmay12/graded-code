<?php
namespace Test;
require_once "classes/simpleMath.php";

describe("simpleMath::add", function(){
  it("It should return 4 given 2 + 2", function($done){
  if (\simpleMath::add(2,2) === 4) return $done(true);
    else return $done(false);
  });
});

describe("simpleMath::curCnv",function(){
  it("It should return 110.00 if given 100 EUR to USD",function($done){
    if(\simpleMath::curCnv(array(0,'EUR'),array(100,'USD')) === 110){
      
      return $done(true);
    }  else {
      echo "function returned => " . \simpleMath::curCnv(array(0,'EUR'),array(100,'USD')) ."<br>";
      return $done(false);
    }
  });
})

?>