<?php

require_once('conn.php');
$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM test WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$email = $row["email"];
		$password = $row["password"];
		
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		
	}
	header("Location: Logged_in_dashboard.php");
}
else
{
	echo "invalid email or password";
	
}
?>