<?php
include("headerView.php");
 ?>



<!DOCTYPE html>
<html lang="en">

  <title>Edit</title>
    
<div style="background-color:black ">

       

</div>



  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    /* .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    } */
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
       .background

	   .form-control{
    border-radius:2rem;
}
  
   

  </style>
<body>




    
<div class="w-100">
      <div class="well my-color">
      
        <p class = "text-info text-center"style="font-weight: bold; color: Aqua; font-size: 50px; float: middle; font-family: 'Poppins', sans-serif; ">Online Voting System</p>


<?php 

require_once 'connect.php';


?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['firstname']) || empty($_POST['lastname']) || 
			empty($_POST['address']) || empty($_POST['contact']) )
		{
			echo "Please fillout all required fields"; 
		}else{		
			$firstname  = $_POST['firstname'];
			$lastname 	= $_POST['lastname'];
			$address 	= $_POST['address'];
			$contact  	= $_POST['contact'];
			$sql = "UPDATE users SET firstname='{$firstname}', lastname = '{$lastname}',
						address = '{$address}', contact = '{$contact}' 
						WHERE user_id=" . $_POST['userid'];

			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully updated the Voter Details</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while updating Voter info</div>";
			}
		}
	}
	$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	$sql = "SELECT * FROM users WHERE user_id={$id}";
	$result = $con->query($sql);

	if($result->num_rows < 1){
		header('Location: index.php');
		exit;
	}
	$row = $result->fetch_assoc();
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3 style="color:Aqua"><i ></i>&nbsp;Edit Voter List</h3> 
			<form name="myform" action="" method="POST" onsubmit="return validateform()">
				<input type="hidden" value="<?php echo $row['user_id']; ?>" name="userid">
				<label  style="color: black; font-size:20px;" for="firstname">Firstname</label>
				<input type="text" id="name"  name="firstname" value="<?php echo $row['firstname']; ?>" class="form-control" onkeyup="checkName()" onblur="checkName()">
        <span id="nameErr" style="color:red"></span>

				<label style="color: black; font-size:20px;"  for="lastname">Lastname</label>
				<input type="text"  name="lastname" id="lname" value="<?php echo $row['lastname']; ?>" class="form-control" onkeyup="checkLName()" onblur="checkLName()">
        <span id="lnameErr" style="color:red"></span>


				<label style="color: black; font-size:20px;"  for="address">Address</label>
				<textarea rows="1" id="address"  name="address" class="form-control"  onkeyup="checkAdd()" onblur="checkAdd()"><?php echo $row['address']; ?></textarea><span id="addErr" style="color:red"></span>
				<label style="color: black; font-size:20px;"  for="contact">Contact</label> 
				<input type="text"  name="contact" id="contact"  value="<?php echo $row['contact']; ?>" class="form-control" onkeyup="checkContact()" onblur="checkContact()">
        <span id="contactErr" style="color:red"></span><br>
				


				<input style="font-size:20px; "  type="submit" name="update" value="Update">
				<a href="Logged_in_dashboard.php">Back</a></p>
			</form>
			</form>
		</div>
	</div>
</div>
</div>

<br>

 <div style="color:white; text-align:center ">


</div>
</div>
</div>
</div>
</div>
<footer>
  <?php 
 include 'footer.php';?>

</footer>
</body>
