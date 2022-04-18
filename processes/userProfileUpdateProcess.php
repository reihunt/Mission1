<?php
session_start();
// Report all PHP errors
error_reporting(E_ALL);

if(isset($_POST['update'])){
	include('../config/db.php');
	$userNewName        =    $_POST['userName'];
	$userNewEmail       =    $_POST['userEmail'];
	$userNewDescription =    $_POST['userDescription'];
	$userImage          =   $_FILES['userImage'];

	if(!empty($userNewName) && !empty($userNewEmail)){

		$imageName = $userImage ['name'];
		$fileType  = $userImage['type'];
		$fileSize  = $userImage['size'];
		$fileTmpName = $userImage['tmp_name'];
		$fileError = $userImage['error'];

		$fileImageData = explode('/',$fileType);
		$fileExtension = $fileImageData[count($fileImageData)-1];

		if($fileExtension == 'jpg' || $fileExtension == 'png' || $fileExtension == 'jpeg'){
			//Process Image

			if($fileSize < 5000000){
				//var_dump(basename($imageName));

				$fileNewName = "../public/userImages/".$imageName;

				$uploaded = move_uploaded_file($fileTmpName,$fileNewName);

				if($uploaded){
					$loggedInUser = $_SESSION['email'];

					$sql = "UPDATE users INNER JOIN profile ON users.id = profile.id SET users.email = '$userNewEmail', users.name = '$userNewName', profile.image_link = '$fileNewName', profile.description = '$userNewDescription' WHERE email = '$loggedInUser'";

					$results = mysqli_query($connection,$sql);
					header('Location:../create_profile.php?success=userUpdated');
					exit;
				}


			}else{
				header('Location:../create_profile.php?error=invalidFileSize');
				exit;
			}
			exit;
		}else{
			header('Location:../create_profile.php?error=invalidFileType');
			exit;
		}



	}else{
		header('Location:../create_profile.php?error=emptyNameAndEmail');
		exit;
	}
}
?>
