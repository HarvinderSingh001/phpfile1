<?php
  class A{
    const name = 'harvinder';
  }
  class B extends A{
    // const name = 'ravinder';
    function get(){
        echo $this::name;
    }
  }
  $obj = new B();
  $obj ->get();
  
?>