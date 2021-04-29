


<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "crud");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM users
  WHERE firstname LIKE '%".$search."%'
  OR lastname LIKE '%".$search."%' 
  OR address LIKE '%".$search."%' 
  
  OR contact LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM users ORDER BY firstname
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
    
     <th>firstname</th>
     <th>lastname</th>
     <th>address</th>
     <th>contact</th>
    </tr>
 ';

 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    
    <td>'.$row["firstname"].'</td>
    <td>'.$row["lastname"].'</td>
    <td>'.$row["address"].'</td>
    <td>'.$row["contact"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data was Not Found';
}

?>






