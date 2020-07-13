<?php
$conn = mysqli_connect('localhost','root','','crud');
$id = $_GET['id'];
$sql ="DELETE FROM data WHERE id = $id";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION['error']=1;
    header("location:index.php");
}
else{
    echo 'Not deleted';
}

?>