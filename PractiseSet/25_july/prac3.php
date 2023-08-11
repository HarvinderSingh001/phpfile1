<?php
//not exected 
// variable cannot contain function 


$arr = [4,5,'harvinder'=>function a(){
    echo "hello sir";
}];
echo $arr['harvinder'];
//  $a = function b(){
//     print_r('this is variable function ');
//  };
//  echo $a;
?>