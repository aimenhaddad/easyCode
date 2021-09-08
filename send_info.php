<?php 
session_start ();
$id=$_SESSION['id'];
include "include/config.php";
$title=$_POST['title'];
$content=$_POST['content'];
$data=$_POST['da'];

if (empty($_POST['send'])) {
   
    $sql = "INSERT INTO mytask (title,content,date,ID,id_user) VALUES ('$title','$content ','$data',null,$id); ";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}





header("Location: admin.php");

?>