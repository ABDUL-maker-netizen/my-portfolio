<?php
session_start();
require "contactconnect.php"; // Only require it once

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
        <h1>INFORMATION</h1>
        <table class="table table-warning  table-hover table-bordered table-striped">
         <thead class="table-dark ">
               <tr>
                
                   <th class="table-warning">Fullname</th>
                   <th>Email</th>
                   <th>Phone number</th>
                   <th>Address</th>
                   <th>Subject</th>
                   <th>Message</th>
             </tr>
        </thead>
        <tbody>
        <?php
        
        $select = mysqli_query($connect, "SELECT * FROM  informationtwo");
            while($row=mysqli_fetch_assoc($select)){
                $fullname = htmlspecialchars($row['fullname']); // Sanitize output
                $email = htmlspecialchars($row['email']);
                $phone_number = htmlspecialchars($row['phone']);
                $Address = htmlspecialchars($row['address']);
                $Subject = htmlspecialchars($row['subject']);
                $Messages = htmlspecialchars($row['messages']);
           echo "<tr>
          <td>$fullname</td>
          <td>$email</td>
          <td>$phone_number</td>
          <td>$Address</td>
          <td>$Subject</td>
          <td>$Messages</td>
          </tr>"; } ?>
        </tbody> 
        
            
        </table>
       <a href="logout.php" class = "btn btn-info">Logout</a>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>