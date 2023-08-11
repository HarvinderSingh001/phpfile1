<?php
//   class A{
//     abstract function  a();
//   }
//   class B extends A{
//     function a(){
//         echo "hello si r";
//     }
//   }
//   echo ((0.1 + 0.7) * 10);
// var_dump($_FILES);
// if($_SERVER['REQUEST_METHOD']=='post'){
   if(isset($_POST['submit'])){
       $upload= $_FILES['image']['name'];
       echo "<br>";
       echo $_FILES['image']['type'];
       echo "<br>";
       echo $_FILES['image']['size'];
       echo "<br>";
       $temp = $_FILES['image']['tmp_name'];
       echo $_FILES['image']['tmp_name'];
       echo "<br>";
       echo $_FILES['image']['error'];
       echo "<br>";
       move_uploaded_file($temp , "html/".$upload);
        
    }
// }
?>
<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method='post' enctype='multipart/form-data'>
        <h1>Upload</h1>
        <input type="file" name="image">
        <input type="submit" name="submit" id="id1">
        <a download="<?php echo $upload ?>" href="html/<?php echo $upload ?>">Download</a>
    </form>
</body>
</html>