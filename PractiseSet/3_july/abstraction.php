<?php
  abstract class A{
     abstract function a();
  }
  class B extends A{
    function a(){
        echo "hello ";
    }
  }
  $a = new B();
  $a->a();

?>