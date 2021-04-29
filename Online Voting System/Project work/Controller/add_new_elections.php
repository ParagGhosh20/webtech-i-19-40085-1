<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Voating System</title>
</head>
<body>
<div class="container">
    <div class="col-sm-6">
    <h3>ADD NEW ELECTION</h3>
    <form action="" method="POST">
        <div class="form-group">
        <label for="" >Add Election Name: </label>
        <input type="text" name="election_name" class="form-control">
        </div>

        <div class="form-group">
        <label for="" >Election Start date : </label>
        <input type="date" name="election_start_date" class="form-control">
        </div>

        <div class="form-group">
        <label for="" >Election End Date: </label>
        <input type="date" name="election_end_date" class="form-control">
        </div>

        <input type="submit" name="add_election"  class="btn btn-success">

    </form>
        
    </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
$conn=new mysqli("localhost","root","","votingsystem_db");

if(isset($_POST['add_election']))
{
$election_name=$_POST['election_name'];
$election_start_date=$_POST['election_start_date'];
$election_end_date=$_POST['election_end_date'];

$insert="insert into election_tbl(election_name,election_start_date,election_end_date) values('$election_name','$election_start_date','$election_end_date')";
$run=$conn->query($insert);
if($run)
{
    echo "success";
}
else
{
    echo "Error";
}

}




?>