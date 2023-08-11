<?php


//   $name = 7;
//   $result=1;
//   while($name>0){
//      $result*=$name;
//      $name--;
//   }
//   echo "factorial of 7 is  " .$result;

// $num=27;
// $n=2;
// while($n<$num){
//     if($num%$n==0){
//            $flag=1;
//         break;
//     }
//     else{
//         $flag=0;
//     }
//     $n++;
// }
// if($flag==1){
//     echo"IT is not a prime  number";
// }
// else{
//     echo"IT is a prime number";
// }
$num1=1;
$num2=100;

while($num1<$num2){
    $a=2;
   while($a<$num1){
    if($num1%$a==0){
        $flag=1;
        break;
    }
    else{
        $flag=0;
    }
   $a++;
   }
   
   if($flag==0){
      echo "$num1"."is a prime number"."<br>";
   }
   $num1++;
}





?>