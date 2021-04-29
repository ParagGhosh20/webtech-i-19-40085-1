
<?php 

include"insert_update_delete_Connect.php"
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
			margin-top: -90px;
			margin-left: -50px;
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body style="">

<form  method="post" action=""> 
<title>Registration Page</title>

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
<form  action="#" onsubmit="return validation()" method="POST">
  <h1>Insert Here</h1>
  <div >
    <label for="firstname">First Name:</label>
    <div >
      <input type="text" name="firstname" autocomplete="off" id="firstname" placeholder="Enter Firstname">
      <span>*</span>
    </div>
  </div>
  <div >
    <label for="voterid">Voter Id:</label>
    <div >
      <input type="number" name="voterid" autocomplete="off"  id="voterid" placeholder="Enter voter id">
      <span ></span>
    </div>
  </div>
  
  <div >
    <label for="email">Email:</label>
    <div >
      <input type="email" name="email"  autocomplete="off" id="email" placeholder="Enter email">
      <span>*</span>
    </div>
  </div>
  <div >
    <label for="pwd">Password:</label>
    <div > 
      <input type="password" name="password" autocomplete="off" id="pwd" placeholder="Enter password">
      <span>*</span>
    </div>
  </div>


  <div >
    <label  for="gender">Gender:</label>
    <div >
      <label ><input type="radio" name="gender" value="m">Male</label>
    <label ><input type="radio" name="gender" value="f">Female</label>
    <span>*</span>
    </div>
  </div>
  <div > 
    <div>
      <button class="button" type="submit" name="insert">Insert</button>
      
      
    </div>
  </div>
</form>
</div>



		<div class="t-container">
     
  <table class="table">
    <thead>
      <tr>
      	<th>#</th>
        <th>Firstname</th>
        <th>Voterid</th>
        <th>Email</th>
        <th>Password</th>
        <th>Gender</th>
         <th>Edit</th>
          <th>Delete</th>

      </tr>
    </thead>
    <tbody>
      <?php 
      $res=mysqli_query($link,"select * from latesttable");
      while ($row=mysqli_fetch_array($res)) {
      	echo "<tr>";
      	echo"<td>"; echo $row["id"]; echo "</td>";
      	echo"<td>"; echo $row["firstname"]; echo "</td>";
      	echo"<td>"; echo $row["voterid"]; echo "</td>";
      	echo"<td>"; echo $row["email"]; echo "</td>";
      	echo"<td>"; echo $row["password"]; echo "</td>";
      	echo"<td>"; echo $row["gender"]; echo "</td>";

      	echo"<td>";?> <a href="edit.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success">Edit </button></a> <?php echo "</td>";

      	echo"<td>";?> <a href="delete.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-danger">Delete </button></a> <?php echo "</td>";


      	echo "</tr>";




      }

       ?>
    </tbody>
  </table>
</div>


<!--java validition-->

   <script type="text/javascript">
   	  
   	  function validation(){

   	  		var user = document.getElementById('firstname').value;

   	  		if (firstname == "") {
   	  			document.getElementById('firstname').innerHTML =" Please fill the Name field";
   	  			return false;
   	  		}

   	  }
   </script>
   




	</body>
	</html>



	<?php 



		if (isset($_POST["insert"])) {

			mysqli_query($link,"insert into latesttable values(NULL,'$_POST[firstname]','$_POST[voterid]','$_POST[email]','$_POST[password]','$_POST[gender]')");

			?>
			<script type="text/javascript">
				window.location.href=window.location.href;
			</script>

			<?php

			
		}

		if (isset($_POST["delete"])) {
			mysqli_query($link,"delete from latesttable where firstname='$_POST[firstname]'") or die(mysqli_error($link));
						?>
			<script type="text/javascript">
				window.location.href=window.location.href;
			</script>

			<?php

		}


		if (isset($_POST["update"])) {
			mysqli_query($link,"update latesttable set firstname'$_POST[firstname]' where firstname='$_POST[firstname]'") or die(mysqli_error($link));
						?>
			<script type="text/javascript">
				window.location.href=window.location.href;
			</script>

			<?php
		}

		



	 ?>
