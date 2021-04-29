


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live searching </title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-secondary">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Vote</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="Home_Page.php">Home Page</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Logged_in_dashboard.php">Dashboard</a>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Login
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="loginUserView.php">Login</a>
        <a class="dropdown-item" href="signupUserView.php">Registration</a>
        <a class="dropdown-item" href="changePasswordUserView.php">Change Password</a>
        
      </div>
    

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Profile
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="viewProfileUserView.php">View Profile</a>
        <a class="dropdown-item" href="editProfileUserView.php">Edit Profile</a>
        
      </div>
    </li>
  </ul>
</nav>

<!-- <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 bg-light mt-2 rounded">
            <h1 class="text-primary p-2">Welcome to Online Voting Website</h1>
            
            

    </div> -->
</div>

</body>
</html>
