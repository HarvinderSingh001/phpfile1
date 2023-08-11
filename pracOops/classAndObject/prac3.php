<?php
  //self used to access static  property
  //this is used to access property  belonging to object of a class ;
  class A{
        static $company  ;
        var $name ;
        function set($com ,  $name){
            static::$company=$com;
            $this->name = $name;
        }
        function get(){
          echo   static::$company;
          echo   $this->name;
        }
  }
  $obj = new A();
  $obj->set('shineDezign' , 'harvinder');
  $obj->get();
?>