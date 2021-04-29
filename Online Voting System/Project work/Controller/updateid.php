
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Update ID Request</title>
</head>
<body>
<div class="container">
    <div class="col-sm-6"> 
    <?php
    $conn=new mysqli("localhost","root","","votingsystem_db");
    $id=$_GET['id'];
    $select="select * from id_request_tbl where ID='$id'";
    $run=$conn->query($select);
        if($run->num_rows>0){
            while($row=$run->fetch_array()){
            $user_email=$row['user_email'];
            $user_location=$row['user_location'];
            $trim_location=substr($user_location,0,3);
            $rand=rand(123452,9999999);
            $generated_id= strtoupper($trim_location. $rand);
            

        }
            ?>

        <form action="" method="post">

            <div class="form-group">
            <label for="user_name">User Email :</label>
            <input type="email" name="user_email" class="form-control" id="exampleInputEmail" readonly value="<?php echo $user_email; ?>" >
            </div>

            <div class="form-group">
            <label for="user_name">User Location :</label>
            <input type="text" name="user_location" class="form-control" id="exampleInputName" readonly value="<?php echo $user_location; ?>">
            </div>

            <div class="form-group">
            <label for="user_name">User ID Generator</label>
            <input type="text" name="user_id_gen" class="form-control" id="exampleInputName" readonly value="<?php echo $generated_id; ?>">
            </div>

            <div class="form-group">
            <input type="submit" value="Update User Id" name="update" class="form-control btn btn-success">
            </div>


            </form>

            
            <?php
            }
            else{
                echo "Record Not Found";
            }
            ?>
       
    </div>

    <div class="col-sm-6"> 
       
    </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['update']))
{
$user_email=$_POST['user_email'];
$user_id_gen=$_POST['user_id_gen'];
$update="update users_db set user_id_generated='$user_id_gen' where user_email='$user_email'";
$run=$conn->query($update);
if($run)
{
$delete="delete from id_request_tbl where user_email='$user_email'";
$del=$conn->query($delete);
if($del)
{
    echo "<script>alert('update succesfully!')</script>";
    echo "<script>window.location.href='id_request.php'</script>";
}
}
else
{
    echo "<script>alert('something went wrong...')</script>";

}
}
?>
