<?php
session_start();
if(isset($_POST['btn'])){
    $email = $_POST['email'];
    $conn = mysqli_connect('localhost','root','','crud');
    $sql = "SELECT * FROM data WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $data=mysqli_fetch_assoc($result);
        $_SESSION['email_match'] = 1;
    }else{
        $_SESSION['email_doesnt_match'] = 1;
    }
}



?>









<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>CRUD Search page</title>
  </head>
  <body>
    <div class="container">
       <div class="row">
       <div class="offset-3 col-md-6">
      <?php  if(isset($_SESSION['email_doesnt_match'])){?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Email doesnt match! : )</strong> Please try again! 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
     <?php }?>
      <div class="main-content">
        <h2 class="mb-3">Search An User</h2>
      <form action="" method="post">
      <div class="row no-gutters">
      <div class="col-7">
      <input type="email" placeholder = "Enter your email " class="form-control" name = "email"></div>
      <div class="col-3">
      <input type="submit" value = "Search" class="btn btn-info" name = "btn">
      </div>
      <div class="col-2">
      <a href="index.php" class="btn btn-success">Back</a>
      </div></div>
      
      </form>
      </div>
      <?php  if(isset($_SESSION['email_match'])){?>
      <table class="table mt-5 border">
  <thead>
    <tr>
      <th scope="col">Name  </th>
      <td><?php  echo $data['name']; ?></td>
    </tr>
    <tr>
      <th scope="col">Email  </th>
      <td><?php  echo $data['email']; ?></td>
    </tr>
    <tr>
      <th scope="col">Address  </th>
      <td><?php  echo $data['city']; ?></td>
    </tr>
    <tr>
      <th scope="col">Phone  </th>
      <td><?php  echo $data['phone']; ?></td>
    </tr>
  </thead>
</table>

<?php }?>
       </div></div>



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
      }
      .student-data-list{
          border: 2px solid #00b894;
          padding: 15px;
      }
      .student-data-list h2{
          text-align: left;
      }
      td{
          color: #2d3436;
      }
      .main-content{
          margin-top:100px;
      }
    </style>
</html>



<?php


unset($_SESSION['email_doesnt_match']);
unset($_SESSION['email_match']);
?>