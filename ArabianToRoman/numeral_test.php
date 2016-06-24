<?php

require "numeral.php";

class NumeralTest extends PHPUnit_Framework_TestCase
{
    public function test_true () {
        $this->assertEquals( true, true );
    }

    public function test_Zero () {
        $this->assertEquals( "", arabianToRoman(0) );
    }

    public function test_I () {
        $this->assertEquals( "I", arabianToRoman(1) );
    }
    
    public function test_II () {
        $this->assertEquals( "II", arabianToRoman(2) );
    }

    public function test_V () {
        $this->assertEquals( "V", arabianToRoman(5) );
    }

    public function test_X () {
        $this->assertEquals( "X", arabianToRoman(10) );
    }

    public function test_L () {
        $this->assertEquals( "L", arabianToRoman(50) );
    }

    public function test_LXXIV () {
        $this->assertEquals( "LXXIV", arabianToRoman(74) );
    }
}