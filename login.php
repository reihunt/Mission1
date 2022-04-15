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
		<?php include "templates/navbar.html" ?>	
		<!-- End navbar -->

		<!-- Start sign up form -->
		<div class="container h-100 d-flex justify-content-center align-items-center">
			<!-- your form container -->
			<div class="container h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12 col-md-9 col-lg-7 col-xl-6">
						<div class="card m-4" style="border-radius: 50px;">
							<div class="card-body p-5">
								<h2 class="text-center " style="font-weight: bolder">Sign in</h2>
								<p class="text-center text-muted mt-2 mb-5">Sign in to your account</p>
								<form>
									<div class="form-outline mb-4 mt-3">
										<input type="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="Email Address"/>
									</div>
									<div class="form-outline mb-4">
										<input type="password" id="form3Example4cg" class="form-control form-control-lg" placeholder="Password"/>
									</div>
									<div class="d-flex justify-content-center">
										<button type="button" class="btn btn-pink">Login</button>
									</div>
									<p class="text-center text-muted mt-4 mb-0">Don't have an account? <a href="/signup.php" class="fw-bold text-body"><u>Sign up</u></a></p>
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

