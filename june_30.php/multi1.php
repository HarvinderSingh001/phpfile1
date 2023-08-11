<?php
  class A{
    protected $a ;
    protected $b ;
    function a($a,$b){
        $this->a = $a ;
        $this->b = $b;
    }
    
  }
  class B extends A{
    protected $c ;
 
  } 
  class C extends B{
    function c($a,$b,$c){
        $this-> a($a,$b);
        $this ->c =  $c  ;
    }
    function ap(){
        
        echo  $this->a . "<br>";
        echo  $this->b . "<br>";
        echo  $this->c . "<br>";
    }
  }
  $c = new C();
  $c -> c(5,4,6);
  $c -> ap();
?>