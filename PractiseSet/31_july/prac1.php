<?php
 $arr =[
    'name'=>'test',
    'class'=>'xyz',
    'rollNo'=>2,
    'admin'=>'local'
 ];
  $arrayNew = [];
 $value=array_values($arr);
 $key = array_keys($arr);
for($i=0;$i<count($arr);$i++){
    $keys = $arr[$i];
    $arrayNew[$keys]=$value[$i];
}
print_r($arrayNew);
?>