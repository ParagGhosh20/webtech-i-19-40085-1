<?php include 'header.php';
 ?>

<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="updatedata.php" method="post">

    <?php
    $conn=mysqli_connect("localhost","root","","votingsystem_db") or die("Connection faild");
    $user_id=$_GET['id'];
    $sql="select * from users_db where user_id='$user_id'";
    $result=mysqli_query($conn,$sql) or die("query Unsuccessful.");

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result))
        {


    ?>

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="Voter_name" value="<?php echo $row['user_name'];?>"/>
            <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>"/>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="Voter_email" value="<?php echo $row['user_email'];?>"/>
        </div>

       
        <div class="form-group">
            <label>Gender</label>
            <select name="Voter_gender">
                <option value="<?php echo $row['user_gender'];?>" selected ><?php echo $row['user_gender'];?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" name="Voter_location" value="<?php echo $row['user_location'];?>"/>
        </div>


        <div class="form-group">
            <label>Password</label>
            <input type="text" name="Voter_Password" value="<?php echo $row['user_password'];?>"/>
        </div>

        <div class="form-group">
            <label>ID</label>
            <input type="text" name="Voter_id" value="<?php echo $row['user_id_generated'];?>"/>
        </div>

      <input class="submit" type="submit" name="submit" value="Update" />
    </form>
    <?php
        }
    }
    ?>

</div>
</div>
</body>
</html>
