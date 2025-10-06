<?php
session_start();
require('connectlogandreg.php');

if(isset($_POST['signUp'])){
    $firstName=trim($_POST['fName']);
    $firstName = mysqli_real_escape_string($conn, $firstName);
    $lastName=trim($_POST['lName']);
    $lastName = mysqli_real_escape_string($conn, $lastName);
    $email=trim($_POST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password=trim($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    // ************* THE ONLY CHANGE IS HERE *************
    // Hash the password securely using password_hash()
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // ***************************************************

    $error="Email already exist";

    $checkEmail="SELECT * FROM users_login where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo '<div class="alert alert-danger alert-dismissible fade show">';
        echo '  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
        echo '  <strong>Error!</strong> ' . htmlspecialchars($error); // Use htmlspecialchars for security
        echo '</div>';
    } else {
        // Use the securely hashed password in the insert query
        $insertQuery="INSERT INTO users_login(firstName,lastName,email,password)
                      VALUES ('$firstName','$lastName','$email','$hashed_password')"; // Changed $password to $hashed_password
        if($conn->query($insertQuery)==TRUE){
            header("location: login.php");
            exit; // Always exit after a header redirect
        } else {
            echo "Error:".$conn->error;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register and Login</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <link rel="stylesheet" href="css/regslog.css" />
  </head>
  <body>
    <div class="container" id="signUp" >
      <h1 class="form-title">Register</h1>
      <form method="post" action="">
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input
            type="text"
            name="fName"
            id="fName"
            placeholder="First Name"
            required
          />
          <label for="fName">First Name</label>
        </div>

        <div class="input-group">
          <i class="fas fa-user"></i>
          <input
            type="text"
            name="lName"
            id="lName"
            placeholder="Last Name"
            required
          />
          <label for="lName">Last Name</label>
        </div>

        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            required
          />
          <label for="email">Email</label>
        </div>

        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="password"
            required
          />
          <label for="password">Password</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp" />
      </form>
      <!-- <p class="or">----------or----------</p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>-->
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>





