<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit-search'])) {
	$search = mysqli_real_escape_string($conn, $_POST['search']);
	$sql = "SELECT users.ID,email,name,description FROM users INNER JOIN profile ON users.ID = profile.ID WHERE description LIKE '%$search%' OR email LIKE '%$search$' OR name LIKE '%$search%'";
	$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);
	if ($queryResult > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<h3>"." ".$row['name']." ".$row['description']." ".$row['email']."</h3>";
		}	
	}
}
