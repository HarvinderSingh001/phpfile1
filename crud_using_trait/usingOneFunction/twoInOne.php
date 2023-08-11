<?php
   
   function insert($table , $arr){
            
            $name = $table;
            if($name=='teacher'){
            $insert = $insert="INSERT INTO $name( `Name`, `Email`, `Phone_Number`,`subject`, `Address`) VALUES ('$arr[0]','$arr[1]','$arr[2]','$arr[3]','$arr[4]')";}
            if($name=='students'){
                $name='students';
                $insert = "insert into $name (Name , Roll_No , Email , Phone_Number)
            Values('$arr[0]','$arr[1]','$arr[2]','$arr[3]')";
            }
           
            $conn = mysqli_connect('localhost','root','','registration');
            $res = mysqli_query($conn , $insert);
            if($res){
                echo "value  inserted successfully";
            }
            else{
                echo "something happens wrong  ";
            }
   }
  