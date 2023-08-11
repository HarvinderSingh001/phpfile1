<?php
$a = [

    'id' => 5698,

    'first_name' => 'Peter',

    'last_name' => 'Griffin',

    'email' => ' @example@example.com',

    'phone' => ' 12387842732',

    'state'=>'haryana'

];
$i=0;
foreach($a as  $key=>$val){
    if($i<3){
        $temp1[$key]=$val;
    }
    else{
        $temp2[$key]=$val;
    }
    $i++;
}
echo "<pre>";
print_r($temp1);
echo "</pre>";
echo "<pre>";
print_r($temp2);
echo "/<pre>";
// $n = 2;
// $len = count($a);
// $keys = array_keys($a);
// for($i=$len ; $i>$n;$i--){
//     $keys[$i + 1] = $keys[$i];
// }
// foreach($a as $k=>$val){
//     $temp[$k]=$val;
//     if($k =='last_name'){
//         $temp['address']="ynr";
//     }
// }
// echo "<pre>";
// print_r($temp);   
// echo"</pre>"; 
?>