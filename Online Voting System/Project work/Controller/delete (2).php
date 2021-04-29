<?php include 'header.php'; 

if(isset($_POST['deletebtn']))
{

    $user_id=$_POST['sid'];
    $conn=mysqli_connect("localhost","root","","votingsystem_db") or die("Connection faild");
    
    $sql="delete from users_db where user_id='{$user_id}'";
    $result=mysqli_query($conn,$sql) or die("query Unsuccessful.");

}

?>



<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
