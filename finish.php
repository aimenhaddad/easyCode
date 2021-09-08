<?php 
include "etat_finish.php";
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>MY task finish</title>
  <?php include_once "include/bootcss.php";?>
  <link rel="stylesheet" href="style.css">
</head>
<body >

<?php include_once "include/navbar.php";?>

<div class="main-content">
<div class="container-fluid">
<div class="justify-left-left">
      <div class="navbar-body">
            <a class="btn btn-outline-light" href="finish.php">Finish</a>
            <a class="btn btn-outline-light" href="admin.php" >UnFinished </a>
      </div>
</div>
  <h2  class="text-center task" > My Task Finish</h2>
     
          
         
<div class="row justify-content-center">
                <div class="col-12"> 
                     
            <?php if (mysqli_num_rows($result)) {?>
              
              <div class="main-content1">  
              <table class="table   text-center">
                <thead class="thead" >
      <tr>
    
    
    <th scope="col">Title</th>
    <th scope="col">Content</th>
    <th scope="col">Date</th>
    <th scope="col">UnFinished</th>
      </tr>
    </thead>
    <tbody class="tbody" >
    <?php while ($rows=mysqli_fetch_assoc($result)) { ?>
        <tr>
           
            <td><?= $rows['title'];   ?></td>
            <td><?= $rows['content']; ?></td>
            <td><?= $rows['date']  ;  ?></td>
             
    <td> 
  <a class="btn btn-default" href="etat.php?id=<?php echo( $rows['ID']." & etat=".$rows['etat']);?>" ><i class="fa fa-times"></i> </a>
      </td>
        </tr>
         <?php } } ?>
    </tbody>
  </table>
 
  
  </div>
  </div>
</div>
</div>
</div> 
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
 <script>
 $(document).ready(function() {      
    ;
});
    

 </script>
 <?php include_once "include/bootjs.php";?>
</body>
</html>