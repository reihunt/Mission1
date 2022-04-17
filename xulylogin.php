<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'project1') or die('Lỗi kết nối');
mysqli_set_charset($conn, "utf8");

//kiểm tra các trường đã được điền chưa
if(isset($_POST['dangnhap'])){
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	if (empty($email)) {
		array_push($errors, "Email is required"); 
	}

	if (empty($password)) {
		array_push($errors, "Enter password"); 
	}


//authentication
$sql = "SELECT * FROM users WHERE email = '$email'";

//thực thi truy vấn
$result = mysqli_query($conn, $sql);


//check có tồn tại không
if (mysqli_num_rows($result) == 0){
	echo 'K tồn tại';
}
else {
	$row = mysqli_fetch_assoc($result);
	$db_password = $row['password'];

	if($password == $db_password){
		$_SESSION['email'] = $email;
		echo '<script>alert("Đăng nhập thành công");
			window.location="index.php"; </script>';
	}else{
		echo "<script>alert('WRONG USERNAME or PASSWORD!!!')</script>";
	}
	
}
}
?>