<?php

$user_id=$_GET['id'];

    $conn=mysqli_connect("localhost","root","","votingsystem_db") or die("Connection faild");
    
    $sql="delete from users_db where user_id='{$user_id}'";
    $result=mysqli_query($conn,$sql) or die("query Unsuccessful.");
    header("Location: http://localhost/advance%20php/crud/index.php");
?>