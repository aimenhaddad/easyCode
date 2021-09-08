<?php 
include "read.php";
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Admin Page</title>
  <?php include_once "include/bootcss.php"; ?>
  <link rel="stylesheet" href="style.css">
</head>
<body  data-spy="scroll" data-target="#navbar-example" >
<!-- ************************* NAVBAR ************************* -->
<?php include_once "include/navbar.php";?>
<!-- ############################## FIN NAV######################################## -->

<!-- ************************* MY TASK ************************* -->
    <div class="main-content">
   <div class="container-fluid">   
 <!-- ************************* MY TASK  HEAD *************************-->
 <!-- BUTTON ETAT -->
<div class="justify-left-left">
         <div class="navbar-body">
            <a class="btn btn-outline-light" href="finish.php">Finish</a>
            <a class="btn btn-outline-light" href="admin.php" >UnFinished </a>
         </div>
</div>
 <!-- ************************* TITLE && BTN ADD TASK ************************* -->
 <div class="row ">
    <div class="col ">
      <h2  class="text-center task" >MyTask</h2>
      <button class="btn btn-success float-right " data-toggle="modal" data-target="#modalRegisterForm" >ADD<i class="fas fa-plus"></i></button> 
    </div>
</div>
  <!-- ####################################   #################################### -->

       
 
<div class="row ">  
 <?php if (mysqli_num_rows($result)) {?>
 <!-- ************************* TABLE TASK  ************************* -->
 <div class="col justify-content-center ">
 
     <div class="main-content1 ">
       <div  class="table-responsive"> 
        <table class="table">
          <thead class="thead" >
      <tr>
    <th scope="row">ID</th>
    <th scope="row">Title</th>
    <th scope="row">Content</th>
    <th scope="row">Date</th>
    <th scope="row">Finish</th>
    <th scope="row">Action</th>
      </tr>
    </thead>
    <tbody class="tbody  ">
    <?php while ($rows=mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $rows['ID'];   ?></td>
            <td><?= $rows['title'];   ?></td>
            <td><?= $rows['content']; ?></td>
            <td><?= $rows['date']  ;  ?></td>
      <td>
           <a class="btn btn-default" href="etat.php?id=<?php echo( $rows['ID']." & etat=".$rows['etat']);?>" ><i class="far fa-check"></i> </a>
      </td>

    <td>  
    <button class="btn btn-primary modaledit"  ><i class="fas fa-pencil-alt"></i></button>
    <a class="btn btn-danger" href="delete.php?id=<?=$rows['ID'];?>" ><i class="fas fa-trash-alt"></i></a>
    </td>
        </tr>
         <?php } }?>
      </tbody>
      </table>
   </div>
  </div>
 </div>
</div>   
 <!-- #################################### FIN TABLE ####################################--> 

</div>
</div> 
<!-- ######################################################################################## -->

<!-- ######################################################################################## -->
<!--Model pop up ADD -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">ADD NeW Task</h4>
      </div>
      <div class="modal-body mx-3">

        <form action="send_info.php" method="POST">

        <div class="md-form mb-4">
            <label data-error="wrong" data-success="right" for="titl"><b>Title</b></label>
          <input type="text" name="title"  id="titl" class="form-control validate">
        
        </div>
        <div class="md-form mb-4">
    <label data-error="wrong" data-success="right" for="conten"><b>Content</b></label>
     <textarea name="content" id="conten" class="form-control validate"></textarea>
         
        </div>

        <div class="md-form mb-4">
            <label  data-error="wrong" data-success="right" for="start"><b>date</b></label>
            <input type="date" name="da"  id="start" name="trip-start" value="2021-08-13" min="2021-01-01"   class="form-control validate">
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" name="send" >ADD</button>
        <button class="btn btn-danger" data-dismiss="modal">close</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- ######################################################################################## -->
                                    <!--Model pop up EDIT -->
<div class="modal fade" id="modaledi" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title w-100 font-weight-bold">EDIT Task</h5>
      </div>
     
<div class="modal-body mx-3">
        <form action="edit.php" method="POST">
 
       <input type="hidden" name="up_id" id="up_id">
        <div class="md-form mb-4">
            <label for="ti"><b>Title</b></label>
          <input type="text" name="title" id="title" id="ti" class="form-control validate">
        
        </div>
        <div class="md-form mb-4">
    <label  for="con"><b>Content</b></label>   
    <textarea name="content" id="con" class="form-control validate"></textarea>
        </div>

        <div class="md-form mb-4">
            <label for="start"><b>date</b></label>
            <input type="date" name="date" id="date"  id="start" name="trip-start" value="2021-08-13"  class="form-control validate">
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-primary" name="save" >save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- ######################################################################################## -->

<?php include_once "bootjs.php";?>
<script>
  
  $(document).ready(function(){
  $(".modaledit").click(function(){
    $("#modaledi").modal("show");

    $tr=$(this).closest('tr');
    var data =$tr.children("td").map(function(){
     return $(this).text();
    }).get();
    
    $('#up_id').val(data['0']);
    $('#title').val(data['1']);
    $('#con').val(data['2']);
    $('#date').val(data['3']);
  });
});


</script>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
</body>
</html>
