<?php
session_start();
include "dbconnection.php";
$e = $_POST['email'];
$p = $_POST['pass'];

// Sanitize input data to prevent SQL injection
$e = mysqli_real_escape_string($link, $e);
$p = mysqli_real_escape_string($link, $p);

$query = "SELECT * FROM tbluser WHERE email='$e' AND password='$p'";
$result = mysqli_query($link, $query);

if (!$result) {
    // If there's an error, print it
    $error_message = mysqli_error($link);
    echo "MySQL Error: $error_message";
    exit; // Stop further execution of the script
}

// Check if there is a row returned
if (mysqli_num_rows($result) == 1) {
    $_SESSION['id'] = $e;
    header("location:index.php");
    exit; // Stop further execution of the script
} else {
    header("location:page-login.php?m=1");
    exit; // Stop further execution of the script
}
?>
