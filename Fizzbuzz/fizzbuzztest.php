<?php

require "fizzbuzz.php";

class FizzbuzzTest extends PHPUnit_Framework_TestCase
{

    public function test()
    {
        $this->assertEquals(true, true);
    }
     public function testFizz1()
    {
        $this->assertEquals("Fizz", fizzbuzz(3));
    }
     public function testFizz2()
    {
        $this->assertEquals("Buzz", fizzbuzz(5));
    }

      public function testFizz3()
    {
        $this->assertEquals("fizzbuzz", fizzbuzz(15));
    }
      public function testFizz4()
    {
        $this->assertEquals(14, fizzbuzz(14));
    }
    
}


