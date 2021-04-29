<?php
echo $Voter_name=$_POST['Voter_name'];
echo $Voter_email=$_POST['Voter_email'];
echo $Voter_gender=$_POST['Voter_gender'];
echo $Voter_location=$_POST['Voter_location'];
echo $Voter_Password=$_POST['Voter_Password'];
echo $Voter_id=$_POST['Voter_id'];


$conn=mysqli_connect("localhost","root","","votingsystem_db") or die("Connection faild");
    
$sql= "insert into users_db(user_name,user_email,user_gender,user_location,user_password,user_id_generated) values('{$Voter_name}','{$Voter_email}','{$stu_class}','{$Voter_location}','{$Voter_Password}','{$Voter_id}')";
$result=mysqli_query($conn,$sql) or die("query Unsuccessful.");

header("Location: http://localhost/advance%20php/crud/index.php");

mysqli_close($conn);

?>