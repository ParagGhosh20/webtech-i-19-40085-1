



<!DOCTYPE html>
<html>
<title>Contact</title>
<script src="../JS/addContact.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<?php
include("headerView.php");
 ?>
<section>
<panel>
<h1>Contact Details</h1>
<form action="">
<select name="Owners"
onchange="showLocation(this.value)">


<option value="">Select an Contact:</option>


<option value="Kawser Hamid">Kawser Hamid</option>


<option value="Jannat Rakhi">Jannat Rakhi</option>


<option value="Fardin hasan">Fardin Hasan</option>


<option value="Parag ghosh">Parag ghosh</option>


</select>


</form>


<br>


<div id="instruction">Select an contact name to show details...........</div>





</panel>


</section>





<footer>
<?php 
 include 'footer.php';?>

</footer>


</body>