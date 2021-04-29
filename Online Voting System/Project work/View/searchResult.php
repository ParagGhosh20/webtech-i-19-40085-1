<?php
 $data="k";
 
 $value="";
 if(isset($_GET['q']))
 {
   $data=$_GET['q'];
 }
 $db=new mysqli("localhost","root","","votingsystem_db");
 $x="select * from candidates_tbl where candidates_name like '%$data%' limit 1";
 $y=$db->query($x);
 if($y)
 {
   $z=$y->fetch_assoc(); 
   echo "<p>".'#Name:'.$z['candidates_name']."  #obtain vote: ".$z['total_votes']. "</p>";
   
 }
?>