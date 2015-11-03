<?php
namespace Test;
require_once(dirname(_FILE_) . '/celciusConvert.php');

describe("celciusConvert::celConv", function(){
  it("It should return -10 given 14", function($done){
  if (\celciusConvert::celciusConvert(14) === -10) return $done(true);
    else return $done(false);
  });
})

?>