<?php
if(isset($_POST['submit']))
{
  $Voter_name=$_POST['Voter_name'];
  $Voter_email=$_POST['Voter_email'];
  $Voter_Gender=$_POST['Voter_gender'];
  $Voter_location=$_POST['Voter_location'];
  $Voter_Password=$_POST['Voter_Password'];
  $Voter_id=$_POST['Voter_id'];
 echo $user_id=$_POST['user_id'];


$conn=mysqli_connect("localhost","root","","votingsystem_db") or die("Connection faild");
$sql="update users_db set user_name='{$Voter_name}',user_email='{$Voter_email}',user_gender='{$Voter_Gender}',user_location='{$Voter_location}',user_password='{$Voter_Password}',user_id_generated='{$Voter_id}' where user_id='{$user_id}'";
  
$result=mysqli_query($conn,$sql) or die("query Unsuccessful.");

header("Location: http://localhost/advance%20php/crud/index.php");

mysqli_close($conn);
}
else
{
    echo "bal";
}
?>