<?php
require "contactconnect.php";
require_once('csrf.php');
session_start();
header('Content-Type: application/json'); // tell browser it's JSON

$response = ["status" => "error", "message" => ""];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
        $response["message"] = "CSRF validation failed.";
        echo json_encode($response);
        exit;
    }


    $fullname = $_POST['fullname'] ?? "";
    $email = $_POST['email'] ?? "";
    $subject = $_POST['subject'] ?? "";


    // ✅ Validation
    if (empty(trim($fullname))) {
        $response["message"] = "Your full name is empty.";
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', trim($fullname))) {
        $response["message"] = "Full name must contain only letters and spaces.";
    } elseif (empty(trim($email))) {
        $response["message"] = "Your email is empty.";
    }else if(!preg_match("/^[a-zA-Z0-9._+]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", trim($email))){ 
        $response["message"] = "Invalid email format.";
    }
     elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response["message"] = "Invalid email format.";
    } elseif (empty(trim($subject))) {
        $response["message"] = "Please select a subject.";
    } else {

        $fullname = trim(filter_var($fullname, FILTER_SANITIZE_FULL_SPECIAL_CHARS)); // Modern special chars filter
        $email = trim($email); 
        $subject = trim(filter_var($subject, FILTER_SANITIZE_FULL_SPECIAL_CHARS));

        // ✅ Sanitize and insert
        $fullname = mysqli_real_escape_string($connect, trim(filter_var($fullname, FILTER_SANITIZE_FULL_SPECIAL_CHARS)));
        $email = mysqli_real_escape_string($connect, trim($email));
        $subject = mysqli_real_escape_string($connect, trim(filter_var($subject, FILTER_SANITIZE_FULL_SPECIAL_CHARS)));

        $query = "INSERT INTO informationtwo(fullname, email, subject) VALUES('$fullname', '$email', '$subject')";
        $result = mysqli_query($connect, $query);

        if ($result) {
            $response["status"] = "success";
            $response["message"] = "Thanks for contacting us! We’ll get back to you shortly.";
        } else {
            $response["message"] = "Database connection failed. Try again later.";
        }
    }
}

echo json_encode($response);
