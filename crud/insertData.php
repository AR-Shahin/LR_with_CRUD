<?php 
 function dataFilter($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
     }

function emailValidation($email)
     {
         $con = mysqli_connect('localhost', 'root', '', 'crud');
         $sql = "SELECT  * FROM `data` WHERE email = '$email'";
         $result = mysqli_query($con, $sql);
         if (mysqli_num_rows($result) > 0)
         {
             return True;
         }
         else
         {
             return False;
         }
     }
session_start();
if(!isset( $_SESSION['success-login'])){
    $_SESSION['wrong-try'] = 1;
    header('Location:../index.php');
  
  }
if(isset($_POST["btn"])) {
       
    $name = $_POST['userName'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $city = $_POST['district'];
    
   $name = dataFilter($name);
    $email = dataFilter($email);
    $dob = dataFilter($dob);
    $phone = dataFilter($phone);
    $city = dataFilter($city);
    
$con = mysqli_connect('localhost','root','','crud');

if(emailValidation($email)== TRUE){
    $_SESSION['double-mail'] = 1;
    header("location:insert.php");
}
else{
    $sql ="INSERT INTO data VALUES(NULL,'$name','$email','$dob','$phone','$city')";
    if(mysqli_query($con,$sql)){
        $_SESSION['success'] = 1;
        header("location:index.php");
    }
        else{
            $_SESSION['error'] = 1;
            header("location:insert.php");
        }
}

    
} else {    
    echo "N0, mail is not set";
}

?>