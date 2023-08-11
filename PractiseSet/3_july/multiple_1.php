<?php
   trait A1{
    private $a,$b;
    private function set($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
    private function get(){
        echo $this->a;
        echo "<br>";
        echo $this->b;
        echo "<br>";
    }
    protected function mapp($a,$b){
        self::set($a,$b);
        self::get();
    }
   }
   trait A2 {
       var $c; 
       private function getc($c){
        $this->c=$c;
        echo $this->c;
        echo "<br>";
       }
       protected function  mapp2($c){
        self::getc($c);
       }
   }
   class B {
     var $d;
     use A1;
     use A2;
     function getd($a,$b,$c,$d){
        self::mapp($a,$b);
        self::mapp2($c);
        $this->d=$d;
        echo $this->d;
     }
   }
   $b = new B();
   $b->getd(1,2.3,3,4);


?>