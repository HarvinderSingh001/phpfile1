<?php
  // all three keywords are only use with  static variable or function
  class A {
    protected $a = 2;
    static protected $b=19;
    function a(){
        echo $this->a;
    }
  }
  class B extends A{
    protected static $b = 20 ; 
    function b(){
        echo static::$b; //define updated value
        echo"<br>";
        echo self::$b;//define itself class static value where it is define;
        echo"<br>";
        echo parent::$b;//define parent class static value when a class extends another class
        echo"<br>";
    }
  }
  $obj = new B();
  $obj ->b();
?>