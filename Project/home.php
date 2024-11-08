<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    
   <h1>PRODUCTS</h1> 
   <form name="f" method="post" action="">
    PRODUCT ID:<input type="text" pattern="[0-9]+"title="enter a number" name="pid" required/><br>
    NAME:<input type="text"pattern="[A-Za-z]+" title="accpets on characters" name="name" required/><br>
    REORDER:<input type="text" pattern="[6,7,8,9][0-9]{9}" name="reo" required/><br>
    <input type="submit" name="sub" value="save record"/><br>
   </form>
   <?php
   if(isset($_REQUEST['sub'])){
    include 'dbconnection.php'; 
    $p=$_POST['pid'];
    $n=$_POST['name'];
    $re=$_POST['reo'];
   

    $query="select * from tblstudent where rollno='$r'";
    $result=mysqli_query($link,$query) or die(mysqli_error($link));
    //die is for checking the error
    if(mysqli_num_rows($result)>0){
        echo"<script> alert('pid already exists');</script>";
    }
    else{
    $query="insert into tblstudent values('$p','$n','$re')";
    $result= mysqli_query($link,$query);
    if($result){
        echo"record has been inserted";
    }else{
        echo"error in inserting";
    }
   }
}
   ?>
</body>
</html>