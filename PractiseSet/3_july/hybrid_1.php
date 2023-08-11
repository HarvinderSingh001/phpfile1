<?php
   trait A{
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
   trait B  {
       private  $c; 
       use A;
       private function getc($c){
        $this->c=$c;
        echo $this->c;
        echo "<br>";
       }
       protected function mapp2($c){
        self::getc($c);
       }
   }
   trait C{
    private $d;
    use A;
    use B;
    protected function getd($d){
       $this->d=$d;
       echo $this->d;
       echo "<br>";
    }
  }
  class D{
    use B,C;
    function mapp3($a,$b,$c,$d){
        self::mapp1($a,$b);
        self::mapp2($c);
        self::getd($d);
    }
  }
  $obj = new D();
  $obj ->mapp3(34,35,36,70);
?>