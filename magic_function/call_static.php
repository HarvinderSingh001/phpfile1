<?php
  class A{
    static $a = 4;
    static public function a(){
       echo  static::$a;
    }
    static function __callStatic($methods,$arg){
        if(method_exists(__class__,$methods)){
            // call_user_func_array([__CLASS__,$methods],$arg);
            static::$methods($arg);
        }
        else{
            echo "invoked  function is not  defined in the  class ";
        }
    }
  }
  A::a(4,5,6,7);//doubt else part chalna chahiye
  

?>
