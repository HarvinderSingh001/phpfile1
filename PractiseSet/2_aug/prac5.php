<?php
$a = [
  [1,2],
  [1,2]
];
for($i=0;$i<2;$i++){
    for($j=0;$j<2;$j++){
        $temp[$i][$j] = $a[$i][$j]*$b[$i][$j]+ $a[$i][$j]*$a[$j][$i];
    }
}
echo "<pre>";
print_r($temp);
echo "</pre>";