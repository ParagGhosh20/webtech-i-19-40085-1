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
    <form action="" method="POST">
    <?php
        $conn=new mysqli("localhost","root","","votingsystem_db");
        $elections_name=$_GET['elections_name'];
        $total_canditates=$_GET['total_candidates'];
        ?>
        <label for="">Election Name:</label>
        <input type="text" name="elections_name" value="<?php echo $elections_name;?>" class="form-control" readonly="readonly">

        <?php
     for($i=1; $i<=$total_canditates; $i++)
     {
    ?>
        <div class="form-group">
        <label for="">Candidates Name <?php echo $i;?></label>
        <input type="text" name="candidates_name<?php echo $i;?>" class="form-control">
        </div>

    <?php
     }
     ?>

<input type="submit" name="add_details_candidates" class="btn btn-success">
    </form>
    
        
    </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
    if(isset($_POST['add_details_candidates']))
    {
        $total_canditates=$_GET['total_candidates'];
        $election_name=$_POST['elections_name'];

        for($i=1;$i<=$total_canditates;$i++)
        {
            $canditates_name[]=$_POST['candidates_name'.$i];
        }

        for($i=0;$i<$total_canditates;$i++)
        {
            $insert="insert into candidates_tbl(candidates_name,elections_name) values('$canditates_name[$i]','$election_name')";
            $run=$conn->query($insert);
        }
        if($run)
        {
            echo "success";

        }
        else
        {
            echo "error";
        }
    }

?>