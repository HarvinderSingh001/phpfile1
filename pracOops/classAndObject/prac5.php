<?php
  interface car{
    function getMileage($model);
  }
  class dezire implements car{
    function getMileage($model){
        echo "Your car's mileage is good";
    }
  }
  $dezire = new dezire();
  $dezire ->getMileage(34);
?>