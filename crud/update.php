<?php


session_start();
if(!isset( $_SESSION['success-login'])){
  $_SESSION['wrong-try'] = 1;
  header('Location:../index.php');

}
$conn = mysqli_connect('localhost','root','','crud');
     $id = $_GET['id'];
    $sql ="SELECT * FROM data WHERE id = $id";
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

    <title>CRUD Update page</title>
  </head>
  <body>
    <div class="container">
       <h1 class="text-center mb-5 mt-5 pt-2">CRUD using PHP and MYSQL</h1>
        <div class="student-data-list">
            <div class="row">
                <div class="col-10">
                    <h2>Edit <?php echo $data['name'] ;?>'s Data</h2>
                    <hr>
                    
                    <form action="editData.php?id=<?php echo $id;?>" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control"placeholder="Enter Name" required name="userName" value="<?php echo $data['name'];?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control"placeholder="Email" required name="email" value="<?php echo $data['email'];?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Date of Birth</label>
                        <input type="date" class="form-control" required name="dob" value="<?php echo $data['dob'];?>">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" class="form-control" required name="phone" placeholder="Phone Number" value="<?php echo $data['phone'];?>">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputPassword1">District</label>
                        <input type="text" class="form-control" required name="district" placeholder="District" value="<?php echo $data['city'];?>">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
    </style>
</html>