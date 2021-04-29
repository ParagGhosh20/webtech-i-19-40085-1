<!DOCTYPE HTML>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		h1 {text-align: center;}
h2 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
	.error {color: #FF0000;}
	</style>
	</head>
	<body>
		<center></center>

<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>CHANGE PROFILE PICTURE</title>
<h1></h1>

<?php 


session_start();

if (isset($_SESSION['uname'])) {

    echo "<a herf='Bob.php'>Logged in as voter</a><br>";
	echo "<br><a href='Logout.php'>Logout</a><br>";

	

}
else{
		$msg="error";
		header("location:Login.php");
		// echo "<script>location.href='login.php'</script>";
	}

 ?>
 <center></center>
<h2>Account</h2>
<center></center>
<ul> <li><a href= "Logged_in_dashboard.php">Dashboard</a></li>
	<li><a href= "View_Profile.php">View Profile</a></li>
	<li><a href= "Edit_Profile.php">Edit Profile</a></li>
	<li><a href= "Change_Profile_Picture.php">Change Profile Picture</a></li>
	<li><a href= "Change_Password.php">Change Password</a></li>
	<li><a href= "Logout.php">Logout</a></li>
	<li><a href= "voter.php">vote</a></li>
</ul>


	<fieldset>
		<center></center>
	    <legend><h1>PROFILE PICTURE</h1></legend>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br><br>
  <input type="submit" value="Submit" name="submit">

</fieldset>

 <?php include 'footer.php';?>
</form>
</form>
</body>
</html>

