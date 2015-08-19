<?php

class UTest extends PHPUnit_Framework_TestCase
{
  public function GreeterTest()
  {
    $u = new Greeter();
    $this->assertEquals("Hello World!" === $u->show());
  }
}
