<?php
  class state {
  
    function a(){
        
        $state_name="haryana";
        $state_capital="chandigarh";
        echo $state_name ,"<br>", $state_capital,"<br>";
    }
  }
  $obj = new state();
  $obj->a();
  var_dump($obj);
?>