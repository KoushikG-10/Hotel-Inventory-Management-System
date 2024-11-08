
<?php

if(isset($_POST['sub'])){
        include "dbconnection.php";
        $u=$_POST['user'];
        $em=$_POST['Email'];
        $p=$_POST['password'];
        
        $query="insert into tbluser values('$u','$em','$p')";
        $result=mysqli_query($link,$query);
         if(mysqli_affected_rows($link)>0){
             header("location:page-login.php");
         }
         else{
             echo "<script>alert('Data is not Entered');</script>";
             header("location:page-register.php");
         }

    }
    ?>