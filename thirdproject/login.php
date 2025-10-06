<?php
session_start();
require('connectlogandreg.php');

// Redirect if already logged in (optional but good practice)
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: contact-table.php");
    exit;
}

if (isset($_POST['signIn'])) {
    $email = trim($_POST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = trim($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $errorM = "please fill out neccessary field";
    $error_two = "user not found!";
    $error_one = "invalid password!";

    // IMPORTANT: Do NOT hash the password with md5 before comparing with password_verify
    // password_verify expects the plain text password and the hashed password from the database.
    // If you used md5 to hash passwords during registration, then you should use md5 here as well.
    // However, it's highly recommended to use password_hash() for registration and password_verify() for login.
    $errors = false;

    if (empty($email) || empty($password) ){
      echo '<div class="alert alert-danger alert-dismissible fade show">';
      echo '  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
      echo '  <strong>Error!</strong> ' . htmlspecialchars($errorM); // Use htmlspecialchars for security
      echo '</div>';
            $errors = true;
     };
    
     if (!$errors){
      // Assuming you are storing passwords hashed with password_hash() in your database:
    $sql = "SELECT * FROM users_login WHERE email='$email'";
    $result = $conn->query($sql);
    
    if ($row = mysqli_fetch_assoc($result)) {
        // Correct usage of password_verify:
        // $password is the plain text password from the form
        // $row['password'] is the hashed password from the database
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email; // Store email in session if needed
            header("Location: contact-table.php");
            exit;
        } else {
          echo '<div class="alert alert-danger alert-dismissible fade show">';
          echo '  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
          echo '  <strong>Error!</strong> ' . htmlspecialchars($error_one); // Use htmlspecialchars for security
          echo '</div>';
        }
    } else {
      echo '<div class="alert alert-danger alert-dismissible fade show">';
     echo '  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
     echo '  <strong>Error!</strong> ' . htmlspecialchars($error_two); // Use htmlspecialchars for security
     echo '</div>';
        
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
   
    <div class="container" id="signIn">
      <h1 class="form-title">Sign In</h1>
      <form method="post" action="" >
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
        <p class="recover">
          <a href="#">Recover Password</a>
        </p>
        <input type="submit" class="btn" value="Sign In" name="signIn" />
      </form>
      <!-- <p class="or">----------or----------</p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Don't Have Account yet ?</p>
        <button id="signUpButton">Sign Up</button>
      </div>-->
    </div>
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>





