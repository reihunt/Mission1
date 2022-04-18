<nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mx-5 mb-lg-0">
				<!-- Search bar -->
				<form action="search.php" method="POST" class="d-flex">
					<input class="form-control mr-3 search-input" type="search" placeholder="Search" name="search" aria-label="Search">
					<button class="btn" id="btn-search" name="submit-search" type="submit">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
							<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
						</svg>
						<span class="visually-hidden">Button</span>
					</button>
					<?php include "search.php"?>
				</form>
				<!-- Search bar end -->
			</ul>
			<ul class="navbar-nav ml-auto navbar-text mx-4">
				<li class="nav-item mx-3">
					<a class="nav-link active" aria-current="page" href="/">Home</a>
				</li>
				<li class="nav-item mx-3">
					<a class="nav-link" href="/about.php">About us</a>
				</li>
				<li class="nav-item dropdown mx-3">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						User
					</a>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="/create_profile.php">Create Profile</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="">Sign out</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
