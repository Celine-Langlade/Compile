<?php


/*
  Ecrire la fonction scrambe qui mélange un mot sans déplacer
  la 1ere et la dernière lettre
*/
  include 'scrambe.php';

  class ScrambeTest extends PHPUnit_Framework_TestCase 
  {

    public function test() {
        $this->assertEquals(true, true);

    }
    
    public function test1() {
        $this->assertEquals('h', scrambe('hello')[0]);

    }

    public function test2() {
        $this->assertEquals('o', scrambe('hello')[4]);
    }

    
    public function test3() {
        $this->assertEquals( 'n', scrambe('london')[5]);

    }
    

    public function test4() {
        $this->assertEquals('hello', scrambe('hello'));

    }

    public function test5() {
        $this->assertEquals('london', scrambe('london'));

    }

    public function test6() {
        $this->assertEquals('kayak', scrambe('kayak'));

    }
    
    
}