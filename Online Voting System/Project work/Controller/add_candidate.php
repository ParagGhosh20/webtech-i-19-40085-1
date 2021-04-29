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
    <h3>ADD Candidates</h3>
    <form action="add_detaills_candidate.php" method="GET">
        <div class="form-group">
        <label for="" >Election Name: </label>
        <select class="form-control" name="elections_name">
            <option value="" selected="selected">select election</option>
            <?php

                $conn=new mysqli("localhost","root","","votingsystem_db");
                $select="select * from election_tbl";
                $run=$conn->query($select);
                if($run->num_rows>0){
                    while($row=$run->fetch_array()){
                        

                        ?>
                        <option value="<?php echo $row['election_name'];?>"><?php echo $row['election_name'];?></option>
                        <?php
                    } 
                            }
                        ?>
                
            </select>
        </div>
        <div class="form-group">
        <label for="">No Of Candidates</label>
        <input type="text" name="total_candidates" class="form-control">
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




/*
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

*/


?>