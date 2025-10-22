<?php
session_start();
require('../contactconnect.php');

$signin_error = "";

// control which panel to show
$show_signin = true;
$show_signup = false;

// Prefill for login after signup
$prefill_login_email = "";

$error_display="";
$success_display="";

/* SIGN UP */
if (isset($_POST['signUp'])) {
    $show_signup = true;   
    $show_signin = false;

    $firstName = trim($_POST['fName'] ?? '');
    $lastName  = trim($_POST['lName'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $password  = trim($_POST['password'] ?? '');

    $signup_error = "";
    $signup_success = "";
    $is_valid = true;

    // VALIDATION
    if (empty(trim($firstName))) {
        $signup_error = "Your first name is empty.";
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', trim($firstName))) {
        $signup_error = "First name must contain only letters and spaces.";
    } elseif (empty(trim($lastName))) {
        $signup_error = "Your last name is empty.";
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', trim($lastName))) {
        $signup_error = "Last name must contain only letters and spaces.";
    } elseif (empty(trim($email))) {
        $signup_error = "Your email is empty.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $signup_error = "Invalid email format.";
    } else if(!preg_match("/^[a-zA-Z0-9._+]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", trim($email))){
        $signup_error = "Invalid email format.";
    } elseif (empty(trim($password))) {
        $signup_error = "Your password is empty.";
    } elseif (strlen($password) < 6) {
        $signup_error = "Password must be at least 6 characters.";
    }

    // DUPLICATE EMAIL CHECK
    if (!empty($signup_error)) {

       $error_display = '
        <div class="alert alert-danger alert-dismissible fade show mt-2">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Error!</strong> ' . htmlspecialchars($signup_error) . '
        </div>';
        $is_valid = false;
    }

    if($is_valid){

        $firstName = trim(filter_var($firstName, FILTER_SANITIZE_FULL_SPECIAL_CHARS)); // Modern special chars filter
        $lastName = trim(filter_var($lastName, FILTER_SANITIZE_FULL_SPECIAL_CHARS)); // Modern special chars filter
        $email = trim($email);
        $password = trim($password); 

        $firstNameEsc = mysqli_real_escape_string($connect, $firstName);
        $lastNameEsc  = mysqli_real_escape_string($connect, $lastName);
        $emailEsc     = mysqli_real_escape_string($connect, $email);
        $passwordEsc  = mysqli_real_escape_string($connect, $password);

        $email_check = $connect->real_escape_string($email);
        $email_check_q = $connect->query("SELECT id FROM users_login WHERE email='$email_check'");
        if ($email_check_q && $email_check_q->num_rows > 0) {
            $signup_error = "Email already exists.";
            $error_display = '
            <div class="alert alert-danger alert-dismissible fade show mt-2">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Error!</strong> ' . htmlspecialchars($signup_error) . '
            </div>';
        } else {

          $hashed_password = password_hash($passwordEsc, PASSWORD_DEFAULT);

          $insert = "INSERT INTO users_login (firstName, lastName, email, password)
                   VALUES ('$firstNameEsc','$lastNameEsc','$emailEsc','$hashed_password')";
          if ($connect->query($insert) === TRUE) {
              $signup_success = "Account created successfully. You can sign in now.";
              $success_display = '
              <div class="alert alert-success alert-dismissible fade show mt-2">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Success!</strong> ' . htmlspecialchars($signup_success) . '
              </div>';

              $show_signin = true;
              $show_signup = false;
              $prefill_login_email = $email;
          } else {
              $signup_error = "Something went wrong while creating account.";
              $error_display = '
              <div class="alert alert-danger alert-dismissible fade show mt-2">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Error!</strong> ' . htmlspecialchars($signup_error) . '
              </div>';
              $show_signup = true;
              $show_signin = false;
          }
        }
    }
}

/* SIGN IN */
if (isset($_POST['SignIn'])) {
    $show_signin = true;
    $show_signup = false;

    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email) || empty($password)) {
        $signin_error = "Email and password are required.";
    } else {
        $emailEsc = mysqli_real_escape_string($connect, $email);
        $passwordEsc = mysqli_real_escape_string($connect, $password);
        $result = $connect->query("SELECT * FROM users_login WHERE email='$emailEsc' LIMIT 1");
        if ($result && $result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($passwordEsc, $user['password'])) {
                // ✅ success -> set session and go to dashboard
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['firstName'];
                $_SESSION['loggedin'] = true; // ✅ Added this

                header("Location: contact-table.php");
                exit;
            } else {
                $signin_error = "Incorrect password.";
            }
        } else {
            $signin_error = "No account found with that email.";
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
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link rel="stylesheet" href="../css/regslog.css" />
</head>
<body>
  <!-- SIGN UP -->
  <div class="container" id="signUp" style="<?php echo $show_signup ? 'display:block' : 'display:none'; ?>">
    <h1 class="form-title">Register</h1>

    <?php
     echo $error_display;
    ?>

    <form method="post" action="">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="fName" id="fName" value="<?= htmlspecialchars($_POST['fName'] ?? '') ?>" placeholder="First Name" required />
        <label for="fName">First Name</label>
      </div>

      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lName" id="lName" value="<?= htmlspecialchars($_POST['lName'] ?? '') ?>" placeholder="Last Name" required />
        <label for="lName">Last Name</label>
      </div>

      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="signupEmail" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" placeholder="Email" required />
        <label for="signupEmail">Email</label>
      </div>

      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="signupPassword" placeholder="Password" required />
        <label for="signupPassword">Password</label>
      </div>

      <input type="submit" class="btn" value="Sign Up" name="signUp" />
    </form>

    <div class="links">
      <p>Already Have Account?</p>
      <button id="openSignIn">Sign In</button>
    </div>
  </div>

  <!-- SIGN IN -->
  <div class="container" id="signIn" style="<?php echo $show_signin ? 'display:block' : 'display:none'; ?>">
    <h1 class="form-title">Sign In</h1>

  <?php
   echo $success_display;
  ?>

    <?php if (!empty($signin_error)): ?>
      <div class="alert alert-danger alert-dismissible fade show mt-2">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Error!</strong> <?= htmlspecialchars($signin_error) ?>
      </div>
    <?php endif; ?>

    <form method="post" action="">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="loginEmail" value="<?= htmlspecialchars($prefill_login_email ?: ($_POST['email'] ?? '')) ?>" placeholder="Email" required />
        <label for="loginEmail">Email</label>
      </div>

      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="loginPassword" placeholder="Password" required />
        <label for="loginPassword">Password</label>
      </div>

      <p class="recover"><a href="#">Recover Password</a></p>

      <input type="submit" class="btn" value="Sign In" name="SignIn" />
    </form>

    <p class="or">----------or----------</p>

    <div class="links">
      <p>Don't Have Account yet?</p>
      <button id="openSignUp">Sign Up</button>
    </div>
  </div>

  <script>
    const openSignUp = document.getElementById("openSignUp");
    const openSignIn = document.getElementById("openSignIn");
    const signInForm = document.getElementById("signIn");
    const signUpForm = document.getElementById("signUp");

    openSignUp?.addEventListener("click", function () {
      signInForm.style.display = "none";
      signUpForm.style.display = "block";
    });

    openSignIn?.addEventListener("click", function () {
      signInForm.style.display = "block";
      signUpForm.style.display = "none";
    });
  </script>

  <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
