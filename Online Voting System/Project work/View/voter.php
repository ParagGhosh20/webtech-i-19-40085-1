<?php
if(!isset($_SESSION)) { 
session_start();
}

include "header_voter.php"; 
?>
<br>

<center><font size='6'> Vote <BR>
	<br>
	



<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> Which one is your favorite programming language ? <BR>
<input type="radio" name="lan" value="JAVA">  JAVA<BR>
<input type="radio" name="lan" value="	PYTHON ">	PYTHON<BR>
<input type="radio" name="lan" value="C++">   C++ <BR>
<input type="radio" name="lan" value="PHP">  PHP <BR>
<input type="radio" name="lan" value=".NET">  .NET <BR>



<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
