<?php
  class A{
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
    protected function mapp1($a,$b){
        self::set($a,$b);
        self::get();
    }
   }
   class B extends A{
       var $c; 
     private function getc($c){
        $this->c=$c;
        echo $this->c;
        echo "<br>";
       }
    protected function mapp2($c){
        self::getc($c);
    }
   }

   class C extends B{
     var $d;
     function getd($a,$b,$c,$d){
        self::mapp1($a,$b);
        parent::mapp2($c);
        $this->d=$d;
        echo $this->d;
     }
   }
   $d = new C();
   $d->getd(1,2,3,4);

?>