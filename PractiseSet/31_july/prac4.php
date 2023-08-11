<?php
$a=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

for($i=0;$i<count($a);$i++){
    static $sum = 0 ;
    $sum = $sum + $a[$i];
}
echo $sum/count($a);
sort($a);
// print_r($a);
$n= 1;
while($n<=5){
    
    echo $a[($n - 1)];
    echo "<br>";
    $n++;
}
$occ = array_count_values($a);
print_r($occ);
$keys = array_keys($occ);
$n= 1;
while($n<=5){
    
    echo $keys[($n - 1)];
    echo "<br>";
    $n++;
}
?>