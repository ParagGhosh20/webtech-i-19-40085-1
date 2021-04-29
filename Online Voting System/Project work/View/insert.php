
<?php
include("headerView.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>ADD Voter</title>
   <script src="../JS/jsvalidation.js" type="text/javascript"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




</head>

<div style="background-color:black ">


  <style>
   body{
  position: relative;
	height: 100%;
	width:100%;
	background: url('Capture.PNG');
 background-size: 100% 100%; 
	background-position: center;
	background-attachment: fixed;
  font-family: sans-serif;
  
}
   
   .row.content {height: 550px}
    .sidenav {
      height: 100%;
    }
        
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
    /* .background{

    background-color: #243028;
    } */
    .form-control{
    border-radius:2rem;
}
  
  </style>

<div class="w-100">
      <div class="well my-color">
       
        <p class = "text-info text-center"style="font-weight: bold; color: Aqua; font-size: 50px; float: middle; font-family: 'Poppins', sans-serif; ">Online Voting System</p>

       

<?php 

require_once 'connect.php';



?>
<div class="container">
	<?php 

	if(isset($_POST['addnew'])){

		if( empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['address']) || empty($_POST['contact']) ){
			echo "<div class='alert alert-danger'>Please fillout all required fields</div>"; 
		}else{		
			$firstname  = $_POST['firstname'];
			$lastname 	= $_POST['lastname'];
			$address 	= $_POST['address'];
			$contact  	= $_POST['contact'];
			$sql = "INSERT INTO users(firstname,lastname,address,contact) 
		    VALUES('$firstname','$lastname','$address','$contact')";

		  if( $con->query($sql) === TRUE){
        echo "<div class='alert alert-success'>New Voter is added</div>";
      }else{
        echo "<div class='alert alert-danger'>Error: There was an error</div>";
      }
		}
	}
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3 style="color:black ">&nbsp;Add Voter</h3> <br>

			<form name="myform" action=" " method="POST" onsubmit="return validateform()" >

        <label style="color:black; font-size:20px " for="firstname">Firstname</label>
				<input type="text" id="name"  name="firstname" class="form-control" onkeyup="checkName()" onblur="checkName()">
        <span id="nameErr" style="color:red"></span><br><br>

				<label style="color:black; font-size:20px " for="lastname">Lastname</label>
				<input type="text"  name="lastname" id="lname" class="form-control" onkeyup="checkLName()" onblur="checkLName()">
        <span id="lnameErr" style="color:red"></span><br>

				<label style="color:black; font-size:20px " for="address">Address</label>
        <textarea rows="1" name="address"  id="address" class="form-control" onkeyup="checkAdd()" onblur="checkAdd()"></textarea><span id="addErr" style="color:red"></span><br>


				<label style="color:black; font-size:20px " for="contact">Contact</label> 
				<input type="text"  name="contact" id="contact" class="form-control" onkeyup="checkContact()" onblur="checkContact()" ><span id="contactErr" style="color:red"></span>
				<br><br>
				<input style="font-size:20px " type="submit" name="addnew"  value="Add">
        <a href="Logged_in_dashboard.php">Back</a></p>
			</form>
		</div>
	</div>
</div>
</div>

<br><br>
 <div style=" text-align:center ">

</div>

      </div>
</div>
</div>
</div>
</body>
<footer>
  <?php 
 include 'footer.php';?>

</footer>
</html>
