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

		<div class="row" id="members">
			<h1>Our members:</h1>
		</div>
		<div class="container-fluid">
			<div class="row justify-content-around mb-3">
				<div class="col-lg-4">
					<div class="card" style="width:400px">
						<img class="card-img-top" src="public/userImages/23.jpg" alt="Card image">
						<div class="card-body">
							<h4 class="card-title">Benasin</h4>
							<p class="card-text">My name is Ben</p>
							<a href="https://www.intel.com.au/content/www/au/en/products/sku/203474/intel-core-i310105f-processor-6m-cache-up-to-4-40-ghz/specifications.html?wapkw=i3-10105F" target="_blank" class="btn btn-primary">More Information</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	</body>
</html>

