<?php 
include "include/config.php";

 if(!empty($_GET)){


 $etat=$_GET['etat'];
 echo($etat);
 $etat=($etat==1)?0:1;
 
    $sql="UPDATE mytask  SET etat=$etat where id=".$_GET['id'];
  
  mysqli_query($conn, $sql);
 
 }
 if ($_GET['etat'] != 1) {
   header("Location: admin.php");
 }else {
  header("Location: finish.php");
 }

?>