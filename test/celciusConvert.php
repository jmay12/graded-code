<?php
namespace Test;
require_once('classes/celciusConvert.php');

describe("celciusConvert::celConv", function(){
  it("It should return -10 given 14", function($done){
  if (\celciusConvert::celConv(14) == -10) return $done(true);
    else return $done(false);
  });
})

?>