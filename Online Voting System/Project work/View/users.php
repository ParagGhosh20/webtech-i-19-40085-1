<?php
include("headerView.php");
 ?>




<!DOCTYPE html>
<html lang="en">

  <title>Voter list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> 

  <style>

    .row.content {height: 250px}
    
    .sidenav {
      background-color: Aqua;
      height: 80%;
    }

    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
   .table-condensed{
  font-size: 20px;
}


   
  </style>
<body>




    <br>
        
   
      

</div>
</div>

<br><br>
<div class="container">
<br/>

<h2 style="text-align:center; color:black ">Search Voter</h1><br/>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">Search</span>
<input type="text" name="search_text" id="search_text" onkeyup="imu(this.value)" placeholder="Search by voter name" class="form-control">
</div>
</div>
<div>
<h5 id="contant">Show Voter................</h5>
</div>
    <script type="text/javascript">
    let contant=document.getElementById('contant');

function imu(x)
{
    if(x.length==0)
    {
        contant.innerHTML="No data !";
    }
    else
    {
        var xml=new XMLHttpRequest();
        xml.onreadystatechange=function(){

            if(xml.readyState==4 && xml.status==200)
            {
                contant.innerHTML=xml.responseText;
            }
        };

        
        xml.open('GET','search.php?q='+x,true);
      
        xml.send();
    }
}

    
    </script>
  
            <br>	<h2 style="text-align:center; color:black ">Voter details</h2><br>
     
     </div>
        </div>
     
  

 
  <div class="col-sm-12">
          <div class="well my-color"><br><br>
          	
<?php 

require_once 'connect.php';



echo "<div class='container'>";

if( isset($_POST['delete'])){
	$sql = "DELETE FROM users WHERE user_id=" . $_POST['userid'];
	if($con->query($sql) === TRUE){
		echo "<div class='alert alert-success'>One voter is deleted!</div>";
	}
}


$sql 	= "SELECT * FROM users";
$result = $con->query($sql); 

if( $result->num_rows > 0)
{ 
	?>
	
	<table  class="table table-bordered table-hover text-primary table-condensed ">
		<thead>
	     <tr >
			<td style="color: brown; font-size:20px;">FirstName</td>
			<td style="color: brown; font-size:20px; ">Lastname</td>
			<td style="color: brown; font-size:20px; ">Address</td>
			<td style="color: brown; font-size:20px; ">Contact</td>
			<td style="color: brown; font-size:20px; " width="100px">Delete</td>
			<td style="color: brown; font-size:20px; " width="100px">EDIT</td>
		</tr>
	</thead>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form  action='' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['user_id']."' name='userid' />"; //added
		echo "<tr>";
		echo "<td>".$row['firstname'] . "</td>";
		echo "<td>".$row['lastname'] . "</td>";
		echo "<td>".$row['address'] . "</td>";
		echo "<td>".$row['contact'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Delete'  /></td>";  
		echo "<td><a href='edit.php?id=".$row['user_id']."' class='btn btn-info'>Edit</a></td>";
		echo "</tr>";
		echo "</form>"; //added 
	}
	?>
	</table>


<?php 
}
else
{
	echo "<br><br>No Record Found";
}
?> 



 <div >


</div>
</div>
  </div>
</div>
</div>
<footer>
  <?php 
 include 'footer.php';?>

</footer>

  </body>
</html>

