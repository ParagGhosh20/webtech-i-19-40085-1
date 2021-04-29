<?php
include('../model/Adminheader.php');
?>
<br>
<div class="container">
    <div class="col-sm-6">
        <h2>All Requested Data</h2>
        <table class="table table-responsive table-hover">
            <tr>
                <th>#</th>
                <th>User Email</th>
                <th>User Location</th>
                <th>Action</th>
            </tr>
            <?php
            $conn=new mysqli("localhost","root","","votingsystem_db");
            $select="select * from id_request_tbl";
            $run=$conn->query($select);
            if($run->num_rows>0)
            {
                $total=0;
                while($row=$run->fetch_array())
                {
                    $total=$total+1;
                    $id=$row['ID'];
                    ?>
                    <tr>
                        <td><?php echo $total;?></td>
                        <td><?php echo $row['user_email'];?></td>
                        <td><?php echo $row['user_location'];?></td>
                        <td><a href="updateid.php?id=<?php echo $id;?>">Update</a></td>
                    </tr>
                    <?php
                }

            }
            else
            {
                ?>
                
                <tr>
                    <td colspan="4">
                           Record is not found.
                    </td>
                </tr>
                <?php

            }


            
            ?>

        
        </table>
    </div class="col-sm-6">
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>