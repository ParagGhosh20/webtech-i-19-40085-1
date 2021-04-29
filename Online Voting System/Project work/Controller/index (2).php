 <?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $conn=mysqli_connect("localhost","root","","votingsystem_db") or die("Connection faild");
    
    $sql="select * from users_db";
    $result=mysqli_query($conn,$sql) or die("query Unsuccessful.");

    if(mysqli_num_rows($result)>0){

    ?>
    <table cellpadding="10px">
        <thead>
        <th> No </th>
        <th>Voter Name</th>
        <th>Email</th>   
        <th>Gender</th>
        <th>Location</th>
        <th>Password</th>
        <th>Voter ID</th>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_assoc($result)){
        
        ?>
            <tr>
            <td><?php echo $row["user_id"] ;?></td>
                <td><?php echo $row["user_name"] ;?></td>
                <td><?php echo $row["user_email"]; ?></td>
                <td><?php echo $row["user_gender"]; ?></td>
                <td><?php echo $row["user_location"];?></td>
                <td><?php echo $row["user_password"];?></td>
                <td><?php echo $row["user_id_generated"];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row["user_id"];?>'>Edit</a>
                    <a href='deleteIL.php?id=<?php echo $row["user_id"];?>'>Delete</a>
                </td>
            </tr>
           <?php
        }
           ?>      
      </tbody>
    </table>
    <?php }
    else{
        echo "<h2>No record found</h2>";
    }
    mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
