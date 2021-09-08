<?php 
session_start ();
$id=$_SESSION['id'];
include_once "include/config.php";
$sql = "SELECT * FROM mytask  where etat=0  and  id_USER =$id ORDER BY ID DESC";
$result = mysqli_query($conn, $sql);

?>