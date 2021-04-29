
<?php 

include"insert_update_delete_Connect.php";

$id=$_GET["id"];

$firstname="";
$voterid="";
$email="";
$password="";
$gender="";

$res=mysqli_query($link,"select * from latesttable where id=$id");
while ($row=mysqli_fetch_array($res)) {
	
	$firstname=$row["firstname"];
	$voterid=$row["voterid"];
	$email=$row["email"];
	$password=$row["password"];
	$gender=$row["gender"];
	
}



 ?>

<style>
	*{
			padding: 0;
			margin: 0;
		}
		
		body{
			background: url(aaaad.jpg) no-repeat;
	background-size: cover;
	height: 74vh;
		}
		.navbar{
			position: fixed;
			height: 80px;
			width: 100%;
			top: 0;
			left: 0;
			background: rgba(0,0,0,0.4);
		}
		.navbar .logo{
			width: 140px;
			height: auto;
			padding: 20px 100px;
		}
		.navbar ul{
			float: right;
			margin-right: 20px;
		}
		.navbar ul li{
			list-style: none;
			margin: 0 8px;
			display: inline-block;
			line-height: 80px;
		}
		.navbar ul li a{
			font-size: 20px;
			font-family: 'Roboto', sans-serif;
			color: white;
			padding: 6px 13px;
			text-decoration: none;
			transition: .4s;
		}
		.navbar ul li a.active,
		.navbar ul li a:hover{
			background: gray;
			border-radius: 2px;
		}


		.Registration{
			margin-top: -80px;
			margin-left: -400px;
			position: absolute;
			top: 80%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 450px;

		}
		.Registration h1{
			font-size: 40px;
			text-align: center;
			text-transform: uppercase;
			margin-top: -120px;
			margin-left: -220px;
			text-shadow: 6px 12px 8px gray;
			  padding-bottom: 10px;
		}

		.Registration p{
			font-size: 16px;
			margin: auto;
			text-shadow: 4px 10px 8px gray;
		}
		.Registration label{
			line-height: 30px;
			font-size: 20px;
			margin: auto;
			text-shadow: 4px 10px 8px gray;

		}

		.Registration input{
			font-size: 14px;
			padding: auto;
			width: 100%
			border:0;
			border-radius: 5px;
			outline: none;
			margin: auto;
		}

		.button{
			font-size: 18px;
			font-weight: bold;
			margin: 3px 3px;
			padding: 3px 10px;
		}

		.Gander{
			font-size: 18px;
			font-weight: bold;
			margin: 3px 3px;
			padding: 5px 5px;

		}

		.date{
			margin-top: 10px;
		}

	
	

		span{
			color: black;
		}

		.t-container{
			margin-top: 250px;
			margin-left: 450px;
		}

</style>





<!DOCTYPE HTML>
	<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	</head>
	<body >

<form  method="post" action=""> 
<title>Edit profile</title>

<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="imag.png">
				<ul>
					<li><a class="active" href="Home_Page.php">Home</a></li>
					<li><a href="Login.php">Login</a></li>
					<li><a href="Registration.php">Registration</a></li>
					
					
				</ul>
			</nav>
		</div>
<div class="Registration">
<form  action="" method="POST">
  <h1>Edit Here</h1>
  <div >
    <label for="firstname">First Name:</label>
    <div >
      <input type="text" name="firstname" autocomplete="off" id="firstname" placeholder="Enter Firstname" value=" <?php echo $firstname; ?> "  >
      <span>*</span>
    </div>

  </div>
  <div >
    <label for="voterid">Voter Id:</label>
    <div >
      <input type="number" name="voterid" autocomplete="off" id="voterid" placeholder="Enter voter id" 
      value=" <?php echo $voterid; ?> ">
      <span>*</span>
    </div>
  </div>
  
  <div >
    <label for="email">Email:</label>
    <div >
      <input type="email" name="email" autocomplete="off"  id="email" placeholder="Enter email" value=" <?php echo $email; ?> ">
      <span>*</span>
    </div>
  </div>
  <div >
    <label for="pwd">Password:</label>
    <div > 
      <input type="password" name="password" autocomplete="off" id="pwd" placeholder="Enter password" value=" <?php echo $password; ?> ">
      <span>*</span>
    </div>
  </div>


  
  <div > 
    <div>
      
      <button class="button" type="submit" name="update">Update</button>
      
    </div>
  </div>
</form>
</div>



		






	</body>
	<?php 
		
	if (isset($_POST["update"])) 
	{
		mysqli_query($link,"update latesttable set firstname='$_POST[firstname]',voterid='$_POST[voterid]',email='$_POST[email]',password='$_POST[password]' where id=$id");
		?>

     <script type="text/javascript">
	window.location="insert_update_delete_.php";
    </script>
    <?php

	}
	


 ?>
	</html>



	