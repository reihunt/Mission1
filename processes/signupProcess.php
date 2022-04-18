<?php
session_start();

if(isset($_POST['submit'])){
    
    include('../config/db.php');

    if(empty($_POST['userName'])){
        header('Location:../pages/register.php?error=emptyName');
        exit;
    }
    if(empty($_POST['userEmail'])){
        header('Location:../pages/register.php?error=emptyEmail');
        exit;
    }
    if(empty($_POST['userPassword'])){
        header('Location:../pages/register.php?error=emptyPassword');
        exit;
    }


    if(!empty($_POST['userName']) && !empty($_POST['userEmail']) && !empty($_POST['userPassword'])){

        //Checking valid email
        if(!filter_var($_POST['userEmail'],FILTER_VALIDATE_EMAIL)){
            header('Location:../pages/register.php?error=invalidEmail');
            exit;
        }

        
        $userName = mysqli_real_escape_string($connection,strip_tags($_POST['userName']));
        $userEmail = mysqli_real_escape_string($connection,strip_tags($_POST['userEmail']));
        $userPassword = password_hash(mysqli_real_escape_string($connection,$_POST['userPassword']), PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (user_name,email,password,created_at) VALUES ('$userName','$userEmail','$userPassword',now())";

        $inserted = mysqli_query($connection,$sql);

        if($inserted){

            $_SESSION['user_name'] = $userName;


            header('Location:../pages/register.php?success=userCreated');
            exit;
        }else{
            header('Location:../pages/register.php?error=userCrateFailed');
            exit;
        }
    }

}