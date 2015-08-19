<?php

class GreeterTest extends PHPUnit_Framework_TestCase
{
  public function testGreeter()
  {
    $u = new Greeter();
    $this->assertEquals("Hello World!" === $u->show());
  }
}

?>
