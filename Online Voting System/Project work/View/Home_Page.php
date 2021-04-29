<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Welcome to Online Voting System</title>
	<!-- bootstrap cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<!-- font awesome cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<!-- style.css -->
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<!-- jquery cdn -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
<style>
/*google font*/
@import url('https://fonts.googleapis.com/css?family=Poppins:400,700,800,900&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins',sans-serif;
}
.navbar{
	position: fixed;
	top: 0;
	z-index: 99999;
	padding:25px 0;
}
.navbar .logo{
	font-size: 1.5em;
	text-transform: uppercase;
	font-weight: 750;
	letter-spacing: 2px;
}
.navbar ul.nav{
	margin-right: 15%;
}
.navbar ul.nav li.active,
.navbar ul.nav li:hover{
	background:rgba(255, 255, 255, 0.5);
	color: #000;

}
.navbar ul.nav li a{
	color: #fff;
	font-size: 1em;
	font-weight: 500;
}
.navbar ul.nav li.active a,
.navbar ul.nav li:hover a{
	color: #000;
}

/*slider*/
#carouselExampleIndicators{
	position: relative;
	height: 100vh;
	width: 100%;
}
#carouselExampleIndicators .carousel-inner{
	position: relative;
	height: 100%;
	width: 100%;
	background: #000;
}
#carouselExampleIndicators .carousel-inner:before{
	position: absolute;
	content: '';
	background: rgba(0, 0, 0, 0.45);
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	z-index: 1;
}
#carouselExampleIndicators .carousel-inner .carousel-item{
	position: relative;
	height: 100%;
	width:100%;
	background: url('Capture3.PNG');
	background-size: 100% 100%;
	background-position: center;
	background-attachment: fixed;
}
#carouselExampleIndicators .carousel-inner .carousel-item:nth-child(2){
	background: url('Capture4.PNG');
	background-size: 100% 100%;
	background-position: center;
	background-attachment: fixed;
}
#carouselExampleIndicators .carousel-inner .carousel-item:nth-child(3){
	background: url('Capture5.PNG');
	background-size: 100% 100%;
	background-position: center;
	background-attachment: fixed;
}

#carouselExampleIndicators .carousel-inner .carousel-item .info{
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	height: auto;
	width: 100%;
	z-index: 1;
	text-align: center;
}
#carouselExampleIndicators .carousel-inner .carousel-item h1{
	height: auto;
	color: #fff;
	width: 100%;
	z-index: 1;
	text-align: center;
	font-size: 5.5em;
	font-weight: 750;
}
#carouselExampleIndicators .carousel-inner .carousel-item p{
	height: auto;
	color: #ccc;
	width: 100%;
	z-index: 1;
	text-align: center;
	font-size: 1.2em;
	font-weight: 500;
}








*{
    margin:0;
    padding:0;
    box-sizing:border-box
}
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body{
    font-family: 'Poppins', sans-serif;
}
.wrapper{
  width:1200px;
  margin:100px auto;
}
.title{
  text-align:center;
  margin-bottom:60px;
}
.title h4{
  text-transform:capitalize;
  font-size:36px;
  position:relative;
  display:inline-block;
  padding-bottom:10px;
}
.title h4 span{
  display:block;
  font-size:18px;
  font-style:italic;
  margin-bottom:10px;
}
.title h4:before{
  position:absolute;
  content:"";
  width:100px;
  height:2px;
  background-color:#ff7720;
  bottom:0;
  left:50%;
  transform:translateX(-50%);
}
.menu{
  display:flex;
  flex-wrap:wrap;
  justify-content:space-between;
}
.single-menu{
  flex-basis:580px;
  margin-bottom:40px;
  padding-bottom:40px;
  border-bottom:1px solid #ddd;
}
.single-menu:nth-child(5), .single-menu:nth-child(6){
  border-bottom:0;
}
.single-menu{
  display:flex;
  flex-direction:row;
  align-items:center;
}
.single-menu:hover img{
  border-radius:0;
}
.single-menu img{
  max-width:180px;
  margin-right:30px;
  border-radius:50%;
  border:1px solid #ddd;
  padding:3px;
  transition:.5s;
}
.single-menu h4{
  text-transform:capitalize;
  font-size:22px;
  border-bottom:1px dashed #333;
  margin-bottom:5px;
  padding-bottom:5px;
}
.single-menu h4 span{
  float:right;
  color:#ff7720;
  font-style:italic;
}
</style>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 navbar">
				<a href="index.html" class="logo navbar-brand text-white offset-md-2">Online Voting System</a>
				<ul class="nav">
					<li class="nav-item active"><a href="Home_Page.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="loginUserView.php" class="nav-link">Login</a></li>
					<li class="nav-item"><a href="signupUserView.php" class="nav-link">Signup</a></li>
          

					<li class="nav-item"><a href="contactview.php" class="nav-link">Contact Us</a></li>
				</ul>
			</div>

			<!-- slider banner	 -->

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<div class="info">
			      		<h1>Online Voting System</h1>
			      		<p>Eat good food, love your body </p>
			      	</div>
			    </div>
			    <div class="carousel-item">
			    	<div class="info">
			      		<h1>Online Voting System</h1>
			      		<p>Eat good food, love your body</p>
			      	</div>
			    </div>
			    <div class="carousel-item">
			    	<div class="info">
			      		<h1>Online Voting System</h1>
			      		<p>Eat good food, love your body</p>
			      	</div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
	<footer>
  <?php 
 include 'footer.php';?>

</footer>


	<!-- scripts -->
	<!-- bootstrap javascript cdn -->
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 
</body>
</html>