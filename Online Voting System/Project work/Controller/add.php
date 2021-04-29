<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="Voter_name" />
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="Voter_email" />
        </div>

       
        <div class="form-group">
            <label>Gender</label>
            <select name="Voter_gender">
                <option value=""selected disabled></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
            </select>
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" name="Voter_location" />
        </div>


        <div class="form-group">
            <label>Password</label>
            <input type="text" name="Voter_Password" />
        </div>

        <div class="form-group">
            <label>ID</label>
            <input type="text" name="Voter_id" />
        </div>

        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
