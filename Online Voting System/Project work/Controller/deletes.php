<?php 
	include"insert_update_delete_Connect.php";
	$id=$_GET["id"];
	mysqli_query($link,"delete from latesttable where id=$id");
	
 ?>
 <script type="text/javascript">
 	window.location="insert_update_delete_.php"
 </script>