<?php

include 'fibonacci.php';

class fibonacciTest extends PHPUnit_Framework_TestCase
{
    public function test0()
    {
        $this->assertEquals(true, true);
    }

    public function test_zero()
    {
        $this->assertEquals( 0, fibo(0));
    }

    public function test_Fibo_1()
    {
        $this->assertEquals( 1, fibo(1));
    }
  
    public function test_Fibo_2()
    {
        $this->assertEquals( 1, fibo(2));
    }
  
    public function test_Fibo_3()
    {
        $this->assertEquals( 2, fibo(3));
    }
 
    public function test_Fibo_4()
    {
        $this->assertEquals( 3, fibo(4));
    }
 
    public function test_Fibo_5()
    {
        $this->assertEquals( 5, fibo(5));
    }

    public function test_Fibo_6()
    {
        $this->assertEquals( 8, fibo(6));
    }

}	
