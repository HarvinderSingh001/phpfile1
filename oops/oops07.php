<?php
  class A{
    static $a=34;
 static function a(){
        echo "hi i am a static function "."<br>";
        echo $this->a;
    }
  }
  class B extends A{
    function b(){
        echo "i am static function in b class"."<br>";
        $this->a();
    }
  }
 
$a=new A();
$a->a();
$b=new B();
$b->b();

?>