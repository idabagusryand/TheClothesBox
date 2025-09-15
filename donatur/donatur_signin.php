<?php 
  session_start();

  include("../config.php");

  error_reporting(0);

  $email = $_POST['donatur_email'];

  $password = $_POST['donatur_password'];


  $s = "select * from donatur where email = '$email' && password = '".md5($password)."'";

  $result = mysqli_query($con, $s);
  $rows=mysqli_fetch_assoc($result);
  $donatur_name=$rows["Name"];
  $donatur_PhoneNum=$rows["PhoneNum"];
  $num = mysqli_num_rows($result);
  
  if (isset($email) && isset($password)) {
    if ($num == 1)
    {
      $_SESSION['donatur_email'] = $_POST['donatur_email'];
      $_SESSION['donatur_name'] = $donatur_name;
      $_SESSION['donatur_PhoneNum'] = $donatur_PhoneNum;
      header('Location:../php/index.php'); 
    }
    else {
      echo "<script>alert('Username/Password incorrect!')</script>";
      echo "<script>location.href='donatur_signin.php'</script>";
     
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/signin.css">
  <link rel="stylesheet" href="../css/styles.css">
  <title>donatur Sign In</title>
  </head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="../img/logo.jpeg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <h1 style="color:#5B828E;" ><a style="color:#5B828E;" href="../php/index.php">TheClothesBox</a></h1>
              </div>
              <p class="login-card-description">Sign In as donatur</p>
              <form method="post">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="donatur_email" id="donatur_email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="donatur_password" id="donatur_password" class="form-control" placeholder="Password">
                  </div>
                  <button name="login" id="login" class="btn btn-block login-btn mb-4" type="submit">
                    Sign In
                  </button>
                </form>
                
                <p class="login-card-footer-text">Don't have an account? <a href="donatur_signup.php" class="text-reset">Register here</a></p>
                
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </main>
  <script src="../js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>