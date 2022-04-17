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
		<?php include "templates/navbar_loggedin.html" ?>	
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
								<form>
									<div class="custom-file mb-4">
  										<label class="custom-file-label mb-2" for="customFile">Upload avatar</label>
  										<input type="file" class="form-control form-control-lg" id="customFile" placeholder="HH">
									</div>
									<div class="form-outline mb-4">
										<input type="text" class="form-control form-control-lg" placeholder="Your Name"/>
									</div>
									<div class="form-outline mb-4">
										<input type="email" class="form-control form-control-lg" placeholder="Email Address"/>
									</div>
									<div class="form-outline mb-4">
										<textarea class="form-control form-control-lg" placeholder="Description"></textarea>
									</div>

									<div class="d-flex justify-content-center">
										<button type="button" class="btn btn-pink">Save</button>
									</div>
								</form>
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

