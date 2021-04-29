<?php
require_once('conn.php');
$fname = $lname = $gender = $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['voterid'];

$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$gender = $_POST['gender'];

$sql = "INSERT INTO test (firstname,voterid,gender,email,password) VALUES ('$fname','$lname','$gender','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>