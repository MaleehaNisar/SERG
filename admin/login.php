 <!-- Login Server scripting php here  -->
 <?php
  $login = false;
  $showError = false;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'adminpartials/dbconnection.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    // $sql = "Select * from users where username='$username' AND password='$password'";
    // query
    $sql = "Select * from tb_users where username='$username'";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    echo " <br> hello" . $result . "<br>";
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows($result);
    echo "Returned rows are: " . mysqli_num_rows($rowcount);
    printf("Result set has %d rows.\n", $rowcount);
    $row = mysqli_fetch_assoc($result);
    print $row;
    print("test print function");
    if ($num == 1) {
      while ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          header("location: index.php");
        } else {
          $showError = "Invalid Credentials";
        }
      }
    } else {
      $showError = "Invalid Credentials";
    }
  }
  ?>
 <!-- Login HTML body start here  -->
 <!DOCTYPE html>
 <html lang="en">

 <head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link href="img/logo/logo.png" rel="icon">
   <title>SERG Login</title>
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="css/ruang-admin.min.css" rel="stylesheet">

 </head>

 <body class="bg-gradient-login">
   <!-- Login Content -->
   <div class="container-login">
     <div class="row justify-content-center">
       <div class="col-xl-4 col-lg-12 col-md-9">
         <div class="card shadow-sm my-5">
           <div class="card-body p-0">
             <div class="row d-flex justify-content-center">
               <div class="col-lg-12">
                 <div class="login-form">
                   <div class="text-center">
                     <h3>Sign In to <strong>SERG</strong></h3>
                     <p class="mb-4">Software Engineering Research Group, University of Malakand</p>
                   </div>
                   <form class="user" action="#" method="POST">
                     <div class="form-group">
                       <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                     </div>
                     <div class="form-group">
                       <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                     </div>
                     <div class="form-group">
                       <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                         <input type="checkbox" class="custom-control-input" id="customCheck">
                         <label class="custom-control-label" for="customCheck">Remember
                           Me</label>
                       </div>
                     </div>
                     <div class="form-group">
                       <button class="btn btn-primary btn-block">Login</button>
                     </div>
                     <hr>
                   </form>
                   <hr>
                   <div class="text-center">
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Login Content -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <script src="js/ruang-admin.min.js"></script>
 </body>

 </html>