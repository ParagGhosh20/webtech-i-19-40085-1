<?php

session_start();
include('../model/Adminheader.php');
if(!$_SESSION['ADemail'])
{
    echo "<script>window.location.href='../../view/login.php'</script>";
    //header('location:login.php');
}
?>
<br>


<div class="container">
<form action="" method="post">
<button type="button" class="btn btn-lg btn-primary" name="voter_btn" >Voter List</button>
<button type="button" class="btn btn-lg btn-primary" name="cand_btn" >Candidate List</button>
<button type="button" class="btn btn-lg btn-primary" name="addCandidate" >Add candidates</button>
<button type="button" class="btn btn-lg btn-primary" name="election" >Set Elections</button>


<button type="button" class="btn btn-lg btn-primary" name="result_btn" >Result</button>
</form>
</div>
    <script src="js/jquery.min.js"></script>  
    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['addCandidate']))
{
  
    echo "<script>window.location.href='../add_candidate.php'</script>";
}
?>
