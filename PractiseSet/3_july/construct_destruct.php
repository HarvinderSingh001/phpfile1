<?php
  class A{
    private $a=23 , $b=23;
    function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
    function get(){
        echo ($this->a - 1);
        echo "<br>";
        echo ($this->b - 1);
        echo "<br>";
    }
    function __destruct(){
        self::get();
    }
  }
  class B extends A{
    private $c =10 ;
     static $d = 4;
    function __construct($c){
        $this->c=$c;
        echo "derived class constructor is called ";
        echo "<br>";
    }
    static function d(){
       echo static::$d--;
       echo "<br>";
    }
    function __destruct(){
        echo "derived class destructor is  called  ";
        echo "<br>";
        static::d();
        
    }
    
    function  getc(){
        echo ($this->c - 1);
        echo "<br>";
    }
  }
  $a = new B(3);
  $b = new B(3);
  $c = new B(3);

?>