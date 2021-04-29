 <?php
include("headerView.php");
 ?> 

<?php 
session_start();

if (empty($_SESSION['username'])) {
 header('Location:loginTeacherView.php');
}

else{
    echo "<div style='float: right;font-size:20px;margin-right: 40px;';>"." Logged in as&nbsp; <a class='button1' href='viewProfileUserView.php'>".$_SESSION['username']."</a> ||| ";
    echo "<a class='button1' href='../Controller/logoutUserController.php'>Logout</a>";
    echo "</div><br><hr>";
} 
echo "<h1 align='middle'> Welcome ".$_SESSION['username']."</h1>";

 



 



 ?>




<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Sider Menu Bar CSS</title> -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
      <style>

@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');
*{
  padding: 0;
  margin: 0;
  list-style: none;
  text-decoration: none;
}

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


.sidebar {
  position: fixed;
  left: -250px;
  width: 250px;
  height: 100%;
  background: #042331;
  transition: all .5s ease;
}
.sidebar header {
  font-size: 22px;
  color: white;
  line-height: 70px;
  text-align: center;
  background: #063146;
  user-select: none;
}
.sidebar ul a{
  display: block;
  height: 100%;
  width: 100%;
  line-height: 65px;
  font-size: 20px;
  color: white;
  padding-left: 40px;
  box-sizing: border-box;
  border-bottom: 1px solid black;
  border-top: 1px solid rgba(255,255,255,.1);
  transition: .4s;
}
ul li:hover a{
  padding-left: 50px;
}
.sidebar ul a i{
  margin-right: 16px;
}
#check{
  display: none;
}
label #btn,label #cancel{
  position: absolute;
  background: #042331;
  border-radius: 3px;
  cursor: pointer;
}
label #btn{
  left: 40px;
  top: 25px;
  font-size: 35px;
  color: white;
  padding: 6px 12px;
  transition: all .5s;
}
label #cancel{
  z-index: 1111;
  left: -195px;
  top: 17px;
  font-size: 30px;
  color: #0a5275;
  padding: 4px 9px;
  transition: all .5s ease;
}
#check:checked ~ .sidebar{
  left: 0;
}
#check:checked ~ label #btn{
  left: 250px;
  opacity: 0;
  pointer-events: none;
}
#check:checked ~ label #cancel{
  left: 195px;
}
#check:checked ~ section{
  margin-left: 250px;
}

          </style>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Voting App</header>
  <ul>
<li><a href="Logged_in_dashboard.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
<li><a href="insert.php"><i class="fas fa-sliders-h"></i>Add Voter</a></li>
<li><a href="users.php"><i class="fas fa-sliders-h"></i>Edit Voter</a></li>
<li><a href="searchVoter.php"><i class="far fa-question-circle"></i>SearchVoter</a></li>

<li><a href="contactview.php"><i class="far fa-envelope"></i>Contact</a></li>
</ul>
</div>
<div class = "headerbackground">

</div>
<section></section>



  </body>
</html>
