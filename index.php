<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn </title>
    <?php include_once "include/bootcss.php";?>
    <link rel="stylesheet" href="sl.css">
</head>
<body>
    
    
    
    	<!-- Main Content -->
	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><h2><img class="rounded-circle" height="100px" width="100px" src="img/ezcode.png" alt=""></h2></span>
				<h4 class="company_title">EzCode</h4>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2><b>LOGIN</b></h2>
					</div>
					<div class="row">
                   
                       
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                                      </div>
     		
     	                 <?php } ?>
                        
                           
                        </div>
                    </form> 
						<form  
                        action="login.php" 
                        method="POST" 
                        class="form-group">

							<div class="row">
                            <input type="text" 
                            name="uname"
                            class="form__input"  
                            placeholder="Username">
						    </div>	
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
                                <input type="password" 
                            name="password" 
                            class="form__input" 
                            placeholder="Password">
							</div>
							
							<div class="row">
                            <button 
                            type="submit" 
                            class="btn btn-center"
                            name="login">Login</button>
							</div>
						</form>
					</div>
					<div class="row">
						<p>Don't have an account? <a href="singup.php">Register Here</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	
<!-- JavaScript Bundle with Popper -->
<?php include_once "bootjs.php";?>

</body>
</html>