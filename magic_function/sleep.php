<?php
  class A{
    private $a , $b ,$c ;
    function set($a,$b,$c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    
    function __sleep(){
        return array('a','b');
    }
  }
  $obj = new  A();
  $test = serialize($obj);
  $obj -> set(3,4,5);
  echo $test ;

?>