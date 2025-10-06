<?php
$hosts = "localhost";
$users = "root";
$pass = "";
$db = "contactustwo_database";
$conn = new mysqli($hosts,$users,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>