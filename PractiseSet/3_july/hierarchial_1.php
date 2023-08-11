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
       private  $c; 
       private function getc($c){
        $this->c=$c;
        echo $this->c;
        echo "<br>";
       }
      function mapp2($c){
        self::getc($c);
       }
   }
   class C extends A{
     private $d;
     function getd($a,$b,$d){
        self::mapp1($a,$b);
        
        $this->d=$d;
        echo $this->d;
        echo "<br>";
     }
   }
   $obj = new  C();
   $obj ->getd(2,3,4);
   $obj1 = new B();
   $obj1 ->mapp2(5);
?>