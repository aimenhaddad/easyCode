<?php 
session_start();
$id=$_SESSION['id'];
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "include/config.php";

	
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 100000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: admin.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = $id.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "UPDATE users SET user_img='$new_img_name' WHERE id=$id  ";
				mysqli_query($conn, $sql);
				header("Location: admin.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: admin.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: admin.php?error=$em");
	}

}else {
	header("Location: admin.php");
}



?>
