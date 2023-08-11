<?php
   class Person{
         static $conn;
         var $name ;
         protected $address;
         private $id;
         function __construct(){
              static::$conn = mysqli_connect('localhost','root','','test');
              if(static::$conn){
                echo "Login successfully";
                echo  "<br>";
              }
              else{
                die('login Unsuccessfull');
              }
         }
         function __destruct(){
          if(mysqli_close(static::$conn)){
            echo "destroyed";
            echo "<br>";
          };
         
         }
         function insert($name , $address , $id){
              $query = "insert into persons values('$id' , '$name' ,'$address'); ";
              $result = mysqli_query(static::$conn , $query);
              if($result){
                echo "inserted successfully";
                echo "<br>";
              }
         }
         function select(){
          $query = "select * from persons";
          $result = mysqli_query(static::$conn , $query);
          echo "
          <table border=2>
             <tr>
                <th>id</th>
                <th>name</th>
                <th>address</th>
             </tr>";
             while($rows = mysqli_fetch_assoc($result)){
                $id = $rows['id'];
                $name = $rows['name'];
                $address = $rows['address'];
                echo " <tr>
                   <td>".$id."</td>
                   <td>".$name."</td>
                   <td>".$address."</td>
                </tr>";
             }
            echo "</table>";
         }
         function update($id , $name , $address){
            $query = "update persons set name='$name' ,address = '$address' where id = '$id'";
            $result = mysqli_query(static::$conn , $query);
            if($result){
             echo "updated successfully";
            }
         }
         function delete($id){
          $query = "delete from persons where id = '$id'";
          $result = mysqli_query(static::$conn , $query);
          if($result){
            echo "deleted successfully";
          }
         }
   }
   $ravi = new Person();
  //  $ravi ->update(1212 , 'ravinder','jagadhri');
  //  $ravi ->insert('ravi','ynr','1212');
  //  $ravi ->insert('harsh' , 'amb',12);
  $ravi ->select();
  $ravi ->delete(1212);
  $ravi ->select();

?>