<?php
$con = mysqli_connect('localhost','root','','seu');
session_start();


if(isset($_POST['btn'])){
   $email = $_POST['email'];
    $pass = $_POST['password'];
    $sql = "SELECT  * FROM `data` WHERE email = '$email' AND pass = '$pass' ";
    $result = mysqli_query($con,$sql);
    $data = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) >0){
        $_SESSION['success-login'] = True;
        $_SESSION['success-login-alert'] = True;
        $_SESSION['user_name'] = $data['name'];
        header("location:crud/index.php");
    }else{
        $_SESSION['invalid_email_pass'] = 1;
        header("location:index.php");
    }
}





?>