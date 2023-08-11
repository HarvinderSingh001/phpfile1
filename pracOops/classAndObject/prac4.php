<?php
  abstract class car{
    abstract function mileage($inMeters);
  }
  class swift extends car{
    function mileage($inMeters ){
        echo "no mileage";
    }
  }
  $swift = new swift();
  $swift->mileage(23 , 1);

?>