<?php 
include "include/config.php";
  $id = $_POST['up_id'];
  $titl = $_POST['title'];
	$conten =$_POST['content'];
  $date = $_POST['date'];
    
if (empty($_POST['save'])) {
 
    $sql="UPDATE mytask SET title='$titl',content='$conten',date='$date' WHERE ID='$id'";
    mysqli_query($conn, $sql);
    
}
header("Location: admin.php");
 
?>
