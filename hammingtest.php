
<?php

include 'hamming.php';

class HammingTest extends PHPUnit_Framework_TestCase
{
    public function test1() {
        $this->assertEquals(true, true);
    }

      public function test2() {
        $this->assertEquals(0,  distance('A','A'));
    }

    public function test3() {
        $this->assertEquals(1,  distance('A','B'));
    }

    public function test4() {
        $this->assertEquals(2,  distance('AB','BA'));
    }

    public function test5() {
        $this->assertEquals(5,  distance('ABCDEF','BACFGH'));
    }

}
