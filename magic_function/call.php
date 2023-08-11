<?php
   class A{
    private function a(){
        echo "hello";
    }
    function __call($methods , $arg){
      if(method_exists($this,$methods)){
           call_user_func_array([$this,$methods],$arg);
      }
      else{
        echo "You invoked an undefined function ";
      }
    }
   }
   $obj = new A();
   $obj -> a(2,3); //doubt error aani chahiye
?>