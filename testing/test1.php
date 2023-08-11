<?php
 include('dbconn.php');
 $create ="create table information (
     name varchar(40) not null,
     id varchar(6) primary key,
     age int(3) ,
     cid varchar(30) ,
     address varchar(49)
 );";
 $insert="insert into  information(name,id,age,cid,address)
 values('harvinder','pb6500','21','bca','yamuna nagar');  ";

 $update="update information set name='ravinder' where age=21;" ;

 $del ='drop table information';

 $trun = 'truncate table information';

//  $create_r=mysqli_query($conn,$create);
//  $insert_r = mysqli_query($conn,$insert);
//  $update_r = mysqli_query($conn,$update);
//  $del_r = mysqli_query($conn,$del);
// $trun_r = mysqli_query($conn,$trun);
?>