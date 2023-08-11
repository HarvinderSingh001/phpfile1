<?php
  trait haryana{
    static $cityName ;
    abstract function setCityName($name);
  }
  class YamunaNagar {
    use haryana;
    function setCityName($name){
        static::$cityName = $name;
    }
    function getcityName(){
        echo static::$cityName;
    }
  }
  $ynr = new YamunaNagar();
  $ynr->setCityName('jagadhri');
  $ynr->getcityName();
