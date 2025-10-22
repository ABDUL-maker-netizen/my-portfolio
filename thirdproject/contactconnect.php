<?php
$server = "localhost";
$Username = "root";
$Password = "";
$Database = "contactustwo_database";

try {
    $connect = new mysqli($server,$Username,$Password,$Database);
} catch (mysqli_sql_exception) {
    echo "could not connect";
}

?>
