<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
session_unset();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: abdul_0000_1382_wxyz.php");
exit;
?>
