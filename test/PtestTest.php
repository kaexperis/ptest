<?php
 
use Kaushik\Ptest;
 
class PtestTest extends PHPUnit_Framework_TestCase {
 
  public function testPtesthello()
  {
    $nacho = new Ptest;
    $this->assertTrue($nacho->hello());
  }
 
}