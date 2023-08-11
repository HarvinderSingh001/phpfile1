<?php
$arr =  ['name'=>'test','id'=>12,'roll'=>1];
$array = [2,3,4,5,6,1];

for($i=0;$i<=5;$i++){
    if($i<3){
        $temp1[$i]=$array[$i];
    }
    else{
        $temp2[$i - 3]=$array[$i];
       
    }
}
print_r($temp1);
print_r($temp2);
// for($i=0;$i<3;$i++){
//     $New[$temp1[$i]]=$temp2[$i];
// }

// print_r($New);
// for($i=0,$j=3;$i<3,$j<6;$i++,$j++){
//     $New[$array[$i]]=$array[$j];
// }
print_r($New);