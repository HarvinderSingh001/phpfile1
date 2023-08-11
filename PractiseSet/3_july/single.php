<?php
   class A{
    var $a,$b;
    function set($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
    function get(){
        echo $this->a;
        echo "<br>";
        echo $this->b;
        echo "<br>";
    }
   }
   class B extends A{
       var $c; 
       function getc($c){
        $this->c=$c;
        echo $this->c;
       }
   }
   $b= new B();
   $b->set(3,5);
   $b->get();
   $b->getc(6);
   
?>