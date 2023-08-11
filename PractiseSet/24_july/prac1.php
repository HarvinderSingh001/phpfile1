<?php
//   echo <<<End
//      abc
//    End;
//   echo <<<end
//      d e f
//    end;
setcookie('harvinder','singh');
  $arr = [2,3,4,5,];  // while  defining array comma is optional for the  last element
//   var_dump($arr);
  $a = '08.34';  //integers in string consider as integers while checking conditions
  if($a==8){
    echo "successful";
  }
  // setcookie('harvind','singh' , time());
  // print_r($_COOKIE['harvinder']); // cookie cannot  be accessed on another page
?>
 <!-- Strings containing valid decimal ints, unless the number is preceded by a + sign, will be cast to the int type. E.g. the key "8" will actually be stored under 8. On the other hand "08" will not be cast, as it isn't a valid decimal integer.
Floats are also cast to ints, which means that the fractional part will be truncated. E.g. the key 8.7 will actually be stored under 8.
Bools are cast to ints, too, i.e. the key true will actually be stored under 1 and the key false under 0.
Null will be cast to the empty string, i.e. the key null will actually be stored under "".
Arrays and objects can not be used as keys -->