<?php
     $data="k";
     if(isset($_GET['q']))
     {
       $data=$_GET['q'];
     }
     $db=new mysqli("localhost","root","","crud");
     $x="select * from users where firstname like '%$data%' limit 1";
     $y=$db->query($x);
     if($y)
     {
       $z=$y->fetch_assoc(); 
       echo "<h4 >".'FirstName:'.$z['firstname']." <br> <br>
       LastName: ".$z['lastname']. " <br> <br>
       Address: ".$z['address']. " <br> <br>
       Contact Number: ".$z['contact']. "</h4>";
      
     }
     

?>