<?php
session_start();
include 'dbconnection.php';
$password =$_POST['password'];
$email = $_SESSION['id'];

$query = "update tbluser set password='$password' where email='$email'";
$result = mysqli_query($link,$query);

if (!$result) {
    // If there's an error, print it
    $error_message = mysqli_error($link);
    echo "MySQL Error: $error_message";
    exit; // Stop further execution of the script
}
else{
    echo "<script>alert('Password change successfully'); window.location.href = 'changepassword.php';</script>";
    
}

?>