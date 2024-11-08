<?php
 include "dbconnection.php";
if(isset($_GET['id'])){
 $query="delete from tblpurchase where product_ID='{$_GET['id']}'";
 $result=mysqli_query($link,$query);
 
 if($result){
    header("location:view.php");
 }
 else{
    echo "There is no record with that Roll No";
 }
}

?>