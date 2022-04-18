<?php
    include('includes/header.php');
    include('config/db.php');
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="/templates/css/style.css" rel="stylesheet" >

		<title>Team Fire Portfolio</title>
	</head>

	<body>
		<!-- Start navbar -->
		<?php include "templates/navbar.php" ?>	
		<!-- End navbar -->

		<!-- Start sign up form -->
		<div class="container h-100 d-flex justify-content-center align-items-center">
			<!-- your form container -->
			<div class="container h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12 col-md-9 col-lg-7 col-xl-6">
						<div class="card m-3" style="border-radius: 50px;">
							<div class="card-body p-5">
								<h2 class="text-center mb-5" style="font-weight: bolder">Create Profile</h2>
									<div align="center">
										<?php
										if($_GET['success']){
											if($_GET['success'] == 'userUpdated'){
												?>
												<small class="alert alert-success"> User updated Successfully</small>
												<hr>
												<?php
											}
										}
										if(isset($_GET['error'])){
							
											if($_GET['error'] == 'emptyNameAndEmail'){
												?>
												<small class="alert alert-danger"> Name and email is required</small>
												<hr>
												<?php
											}else if($_GET['error'] == 'invalidFileType'){
												?>
												<small class="alert alert-danger"> Invalid file type, Only Images allowed.</small>
												<hr>
												<?php
											}else if($_GET['error'] == 'invalidFileSize'){
												?>
												<small class="alert alert-danger"> Maximum 5mb Image size allowed.</small>
												<hr>
												<?php
											}
										}
										?>
									</div>
						<?php
                        $currentUser = $_SESSION['email'];
                        $sql = "SELECT * FROM users WHERE email ='$currentUser'";

                        $results = mysqli_query($connection,$sql);

                        if($results){
                            if(mysqli_num_rows($results)>0)	{
                                $row = mysqli_fetch_array($results);
                        ?>
								<form action="processes/userProfileUpdateProcess.php" method="POST" enctype="multipart/form-data">
									<div class="custom-file mb-4">
  										<label class="custom-file-label mb-2" for="customFile">Upload avatar</label>
  										<input type="file" class="form-control form-control-lg" id="customFile" name="userImage">
									</div>
									<div class="form-outline mb-4">
										<input type="text" class="form-control form-control-lg" value="<?php echo $row['name']; ?>" name="userName"/>
									</div>
									<div class="form-outline mb-4">
										<input type="email" class="form-control form-control-lg" value="<?php echo $row['email']; ?>" name="userEmail"/>
									</div>
									<div class="form-outline mb-4">
										<textarea class="form-control form-control-lg" placeholder="Description" name="userDescription"></textarea>
									</div>

									<div class="d-flex justify-content-center">
										<button type="submit" name="update" class="btn btn-pink">Save</button>
									</div>
								</form>
							<?php }} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- End sign up form -->

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	</body>
</html>
