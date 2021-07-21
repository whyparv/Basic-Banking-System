<?php
$servername = "localhost";
// Enter your MySQL username below(default=root)
$username = "u427229822_bank";
// Enter your MySQL password below
$password = "Bank@123";
$dbname = "u427229822_bank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>
