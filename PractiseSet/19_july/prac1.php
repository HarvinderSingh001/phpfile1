<?php
//  $a = 'hello harvinder';
//  if($a){
//     echo 'if statement';
//  }
//  else{
//     echo "else statement";
//  }
// switch ($a) {
//     case '0':
//         echo "1 statement";
//         break;
//     case 1:
//         echo "2 statement";
//         break;
//     default:
//         echo "default  statement is  called";
//         break;
// }
// for($i=0 ; $i<5 ; $i++){
//     $a = 'toh kaise h ap sab';
//     echo $a;
// }
interface A{
    function a();
}
class b implements A{
    function a(){
        echo "hello";

        
    }
}
?>