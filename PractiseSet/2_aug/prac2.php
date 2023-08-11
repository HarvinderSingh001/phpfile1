<?php
$a = [
    [1,2],[3,4]
];
$b = ['hello', 'bye'];
$flag = 0;
for($i=0;$i<2;$i++){
    for($j=0;$j<3;$j++){
       if($flag==0){
        $New[$i][$j] = $b[$i];
        $flag = 1;
       }
       else{
        $New[$i][$j] = $a[$i][$j-1];     
       }
    }
    $flag = 0;
}
echo "<pre>";
print_r($New);
echo "</pre>";
?>