<?php
// var_dump(0 == "a");
// echo  "<br>";
// var_dump("1" == "01");
// echo  "<br>";
// var_dump("10" == "1e1");
// echo  "<br>";
// var_dump(100 == "1e2");
// echo  "<br>";
// $a = 0;
// switch ($a) {
//     case 0:
//         echo "0";
//         break;
//     case null:
//         echo 'null';
//         break;


// case "a":
//     echo "a";
//     break;
// }
$arr = ['name'=>'harvinder' , 'class'=>'12' , 'rollNo'=>9 , 'address'=>'jarodi'];
$keys=array_keys($arr);

for($i=0;$i<count($arr);$i++){
    if($keys[$i]=='rollNo'){
        continue;
    }
    $arrayNew[$keys[$i]] = $arr[$keys[$i]];
}
// echo 2e3;

print_r($arrayNew);
?>