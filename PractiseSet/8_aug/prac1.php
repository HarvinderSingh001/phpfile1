<?php
   class A{
    // function __construct(public $id){}

    //constructor promotion 
    function __construct(private $sal , public $comp){}
   }
   $obj = new A(23 , "harvinder");
   print_r($obj);
?>