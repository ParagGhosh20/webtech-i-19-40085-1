<?php
$mysqli = new mysqli("localhost", "root", "", "crud");
if($mysqli->connect_error) {
exit('Could not connect');
}

$sql = "SELECT  name, address, gender, designation, age
FROM employee WHERE name = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($name, $address, $gender, $designation,$age);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>NAME:</th>";
echo "<td>" . $name . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Address:</th>";
echo "<td>" . $address . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>GENDER:</th>";
echo "<td>" . $gender . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>DESTINATION:</th>";
echo "<td>" . $designation . "</td>";
echo "</tr>";
"<tr>";
echo "<th>AGE:</th>";
echo "<td>" . $age . "</td>";
echo "</tr>";
echo "</table>";
?>