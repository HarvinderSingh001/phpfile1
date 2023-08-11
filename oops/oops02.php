<?php 
  interface  A{
      public function a();
  }
  interface D{
      public function d();
  }
  class B implements A,D{
     
     function __construct(){
         echo "Your number is";
     }
     function a(){
         echo "this is interface a funciton ";
     }
     function d(){
         echo "this is interface d function";
     }
  }
  $b=new B();
  
  
  
?>