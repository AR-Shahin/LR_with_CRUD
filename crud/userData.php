<?php
session_start();
if(!isset( $_SESSION['success-login'])){
    $_SESSION['wrong-try'] = 1;
    header('Location:../index.php');
  
  }
$conn = mysqli_connect('localhost','root','','crud');
$id = $_GET['id'];
$sql = "SELECT * FROM `data` WHERE id = $id";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>CRUD User data page</title>
  </head>
  <body>
    <div class="container">
       <h1 class="text-center mb-5 mt-5 pt-2">CRUD using PHP and MYSQL</h1>
        <div class="student-data-list">
            <div class="row">
                <div class="col-2 text-center align-self-center">
                    <a href="index.php" class="btn btn-primary">User List</a>
                </div>
                <div class="col-10">
                    <h2><?php echo $data['name'];?>'s Data</h2>
                    <hr>
                    <table class="table">
                      <tr>
                          <th>Name : </th>
                          <td><?php echo $data['name'];?></td>
                      </tr>
                    <tr>
                          <th>Email : </th>
                          <td><?php echo $data['email'];?></td>
                      </tr>
                      <tr>
                          <th>Date of Birth: </th>
                          <td><?php echo $data['dob'];?></td>
                      </tr>
                      <tr>
                          <th>Phone : </th>
                          <td><?php echo $data['phone'];?></td>
                      </tr>
                      <tr>
                          <th>District : </th>
                          <td><?php echo $data['city'];?></td>
                      </tr>
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
  
  <style>
      body{
          background: #ecf0f1;
      }
      h2{
          font-size: 22px;
          color: #2c3e50;
      }
      .student-data-list{
          border: 2px solid #00b894;
          padding: 5px;
          padding-bottom: 0;
      }
      .student-data-list h2{
          text-align: left;
      }
      td{
          color: #2d3436;
      }
    </style>
</html>