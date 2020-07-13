
<?php session_start();

if(!isset( $_SESSION['success-login'])){
  header('Location:../index.php');

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

    <title>CRUD insert page</title>
  </head>
  <body>
    <div class="container">
       <h1 class="text-center mb-5 mt-5 pt-2">CRUD using PHP and MYSQL</h1>
        <div class="student-data-list">
            <div class="row">
                <div class="col-2 text-center">
                    <a href="index.php" class="btn btn-success mt-5">User List</a>
                </div>
                <div class="col-10">
                    <h2>Insert User Data</h2>
                  <?php  if(isset($_SESSION['error'])){ ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Something is wrong : &rpar;</strong> Please try again!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                   <?php }?>
                   <?php  if(isset($_SESSION['double-mail'])){ ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Email is exists : &rpar;</strong> Please try again!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                   <?php }?>
                    <hr>
                    
                    <form action="insertData.php" method ="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control"placeholder="Enter Name" required name="userName">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control"placeholder="Email" required name="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Date of Birth</label>
                        <input type="date" class="form-control" required name="dob">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" class="form-control" required name="phone" placeholder="Phone Number">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputPassword1">District</label>
                        <input type="text" class="form-control" required name="district" placeholder="District">
                      </div>
                      <input type="submit" class="btn btn-primary" value="Submit" name= "btn">
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
      .student-data-list{
          border: 2px solid #00b894;
          padding: 5px;
          padding-bottom: 10px;
      }
      .student-data-list h2{
          text-align: left;
      }
      td{
          color: #2d3436;
      }
    </style>
</html>


<?php unset($_SESSION['error']);
unset($_SESSION['double-mail']);
 ?>