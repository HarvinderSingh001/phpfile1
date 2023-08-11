<?php
 trait A{
   const phoneNumber = '111111';
   var $name ='harvinder';
   var $id = '1';
   function a(){
    echo "trait a function is called";
   }
 }
 trait B{
    var $name = 'ravinder' ;
    var $id = '2';
    function  a(){
        echo "trait b function is called";
    }
 }
 class C {
    const phoneNumber = 4545454;
    function a(){
        echo "class c function is called";
    }
    //cannot override
    // private $name ='kulvinder';
    // private $id = '3';
    use A , B {
        A::a insteadof B;
        B::a as rename;
        A::$phoneNumber insteadof  A;
    }
    function get(){
        echo $this->name ;
        echo $this->id;
    }
 }
 $obj = new C();
 $obj ->get();
 $obj->a();