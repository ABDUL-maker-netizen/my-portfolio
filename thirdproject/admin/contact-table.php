<?php
session_start();
require "../contactconnect.php";

// ✅ Check login status correctly
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: abdul_0000_1382_wxyz.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {

    $id = intval($_POST['id']);
    $delete = "DELETE FROM informationtwo WHERE id = $id";
    $exec = mysqli_query($connect, $delete);

    if ($exec) {
        echo "<script>alert('Deleted successfully');</script>";
        echo "<script>window.open('contact-table.php','_self');</script>";
        exit;
    } else {
        echo "<script>alert('Delete failed');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Table</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid mt-4">
    <h1>Welcome, <?= htmlspecialchars($_SESSION['user_name']) ?>!</h1>
    <h3>INFORMATION</h3>
    <table class="table table-warning table-hover table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Address</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
$select = mysqli_query($connect, "SELECT * FROM informationtwo ORDER BY id DESC");
while ($row = mysqli_fetch_assoc($select)) {
    echo "<tr>
        <td>" . htmlspecialchars($row['fullname']) . "</td>
        <td>" . htmlspecialchars($row['email']) . "</td>
        <td>" . htmlspecialchars($row['phone']) . "</td>
        <td>" . htmlspecialchars($row['address']) . "</td>
        <td>" . htmlspecialchars($row['subject']) . "</td>
        <td>" . htmlspecialchars($row['messages']) . "</td>
        <td>
            <form action='contact-table.php' method='post' style='display:inline;'>
                <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                <button type='submit' onclick='return confirm(\"Are you sure you want to delete this?\");'>Delete</button>
            </form>
        </td>
    </tr>";
}
?>

        </tbody>
    </table>

    <a href="logout.php" class="btn btn-info">Logout</a>
</div>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
