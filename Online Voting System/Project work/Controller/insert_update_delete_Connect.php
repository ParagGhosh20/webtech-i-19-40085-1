<?php 

	$link=mysqli_connect("localhost","root","") or die(mysql_errno($link));
	mysqli_select_db($link,"latest") or die(mysql_errno($link));


 ?>