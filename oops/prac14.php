<?php
namespace my;
   class Village {
      var $name;
      var $distance;
      function set($name,$distance){
        $this->name=$name;
        $this->distance=$distance;
        // echo __LINE__."<br>";
        // echo __FUNCTION__."<br>";
        // echo __METHOD__."<br>";
        // echo __FILE__."<br>";
        // echo __DIR__."<br>";
      }
      function get(){
       echo $this->name;
       echo $this->distance;
      //  echo __CLASS__."<br>";
      
      }

   }
  //  $obj1=new village();
  //  $obj1->set("jarodi","100km");
  //  $obj1->get();
  //  $a = __NAMESPACE__;
  //  echo $a;
  echo Village::class;
?>