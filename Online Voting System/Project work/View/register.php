<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<br>
<center>
<legend> <h3> Register </h3></legend> </center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="4" >
<form action= "reg_action.php" method= "post" id="myform" >
Firstname:
<input type="text" name="firstname" value="" />
<br>
<br>
Lastname: 
<input type="text" name="lastname" value="" />
<br>
<br>
Username: 
<input type="text" name="username" value="" />
<br>
<br>
Password: 
<input type="password" name="password" value="" />
<br>
<br>
<input type="submit" name="submit" value="Next" />
</form>
</font>
</center>
<script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter  firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter  lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter  username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter  password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

</script>
<?php include "footer.php" ;?>