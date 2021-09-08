

<!DOCTYPE html>
<html>
<head>
  <?php 
  include_once "bootcss.php";
  include_once "config.php";
  ?>
  <style>
  .navbar{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background: #000;
    border-radius: 3px;
	    box-shadow: 0 5px 5px rgba(0,0,0,.4);
  }
  .navbar-body{
    margin-top: 10px;
  }
  .colo{
    color: #fff;
  }
</style>
</head>
<body > 

  

             
<nav class="navbar navbar-dark " >

      <div class="navbar-header" >
        <span class="navbar-brand" ><i class="fas fa-laptop-code"></i> EZCODE</span>
     
      </div>
    
      <ul class="nav nav-pills">
        <li class="dropdown">
       
        <?php 
        session_start();
        $id=$_SESSION['id'];
          $sql = "SELECT user_img FROM users WHERE id=$id ";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
        <img src="uploads/<?=$images['user_img']?>"  class="rounded-circle" height="40" width="40" >
         <?php } }?>
        <span class="colo"> <?php echo " ". $_SESSION['name']; ?> </span>
      
        <span class="btn btn-lg  dropdown-toggle" data-toggle="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="colo"> <i class="caret"> </i> </span> </span>
          <ul class="dropdown-menu">
          <li><a class="btn btn-default mode"  ><i class="fa fa-cog"></i> Setting</a></li>
          <li><a class="btn btn-default" href="logout.php"><i class="fa fa-sign-out"></i> LogOut</a></li>
            
            
            
          </ul>
        </li>
      </ul>
  </nav> 
                                      <!--Model pop up EDIT -->
<div class="modal fade" id="uplo" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title w-100 font-weight-bold">EDIT Profile</h5>
      </div>
     


     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">
<div class="modal-body mx-3">
<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
           <input type="file"  name="my_image" class="form-control"/>
                 
           <input type="submit" 
                  name="submit"
                  value="Upload" class="btn btn-primary"/>
     	
                  </form>

     	<h2 class="text-center">Change Password</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <form action="chang.php"
           method="post"
          >
     	
      
     	<label>New Password</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="New Password"
              class="form-control"/>
     	       <br>

     	<label>Confirm New Password</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password"
              class="form-control"/>
     	       <br>
              <label>Old Password</label>
     	<input type="password" 
     	         name="op" 
               placeholder="New Password"
     	        class="form-control"/>
     	       <br>

     	<button type="submit">CHANGE</button>
          
     
     </form>
    </div>
  </div>
</div>
</div>
<!-- ######################################################################################## -->

  <?php include_once "bootjs.php";?>
<script>
  $(document).ready(function(){
  $(".mode").click(function(){
    $("#uplo").modal("show");
  });
});
</script>
</body>
</html>