<?php
session_start();

if(!isset( $_SESSION['success-login'])){
  $_SESSION['wrong-try'] = 1;
  header('Location:../index.php');

}

$conn = mysqli_connect('localhost','root','','crud');
$sql = "SELECT * FROM `data`";
$data = mysqli_query($conn,$sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>CRUD main page</title>
  </head>
  <body>
    <div class="container">

    <div class="success-login-text text-center">
    <?php  if(isset($_SESSION['success-login-alert'])){ ?>
    

    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Sucessfully Login!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php }?>
    </div>
   <div class="logout-btn row mt-4">
   <div class="col-6 text-left">
   <h5>Hi " <?php 
echo $_SESSION['user_name'];?> "</h5>
   </div>
<div class="col-6 text-right">
<a href="logout.php" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Logout</a>
</div>
 </div>
       <h1 class="text-center mb-5 mt-1 pt-2">CRUD using PHP and MYSQL</h1>
        <div class="student-data-list">
            <div class="row">
                <div class="col-2">
           
                    <a href="insert.php" class="btn btn-primary">Add New User</a>
                    <a href="search.php" class="btn btn-info mt-2 ">Search An User</a>

       
                </div>
                <div class="col-10">
                    <h2>User List</h2>
                  <?php  if(isset($_SESSION['success'])){ ?>
    

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Insert</strong> Sucessfully!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php }?>
                    
                    <?php if(isset($_SESSION['error'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Delete</strong> Sucessfully!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                   <?php }?>
                    <?php if(isset($_SESSION['update'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Updated</strong> Sucessfully!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                   <?php }?>
                    <hr>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Date of Birth</th>
                          <th scope="col">Phone</th>
                          <th scope="col">District</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        while($row = mysqli_fetch_assoc($data)){
                        ?>
    
                              <tr>
                           <td><?php echo $row['name'];?></td>
                           <td><?php echo $row['email'];?></td>
                           <td><?php echo $row['dob'];?></td>
                           <td><?php echo $row['phone'];?></td>
                           <td><?php echo $row['city'];?></td>
                           <td>
                               <a href="userData.php?id=<?php echo $row['id'];?>" class="btn btn-success">Show</a>
                               <a  href="update.php?id=<?php echo $row['id'];?>"class="btn btn-warning">Edit</a>
                               <a  href="delete.php?id=<?php echo $row['id'];?>"class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                           </td>
                       </tr>
                       <?php
                        }
                          ?>
                     
                          
                      </tbody>
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
      .btn-primary{
          margin-top: 75px;
      }
      .student-data-list{
          text-align: center;
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
      .container{
          max-width: 1220px;
      }
    </style>
</html>

<?php
unset($_SESSION['success']);
unset($_SESSION['error']);
unset($_SESSION['update']);
unset($_SESSION['success-login-alert']);

?>
