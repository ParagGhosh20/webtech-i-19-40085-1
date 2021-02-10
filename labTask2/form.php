<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $dobErr= $genderErr = $degreeErr = $bloodgroupErr= "";
$name = $email = $dob = $gender = $degree= $bloodgroup="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Cannot be empty";
} 
$name = test_input($_POST["name"]);
if (str_word_count ($name)<2){
$nameErr = "contains atleast 2 words";
}

 else{} {
$name = test_input($_POST["name"]);

if (!preg_match("/^[a-zA-Z-'. ]*$/",$name) ) {
$nameErr = "Only letters and white space allowed";
}
}

$email = test_input($_POST["email"]);
 if (empty($_POST["email"])) {
$emailErr = "Cannot be empty";
} else {
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Must be valid email_address : anything@example.com";
}
else {
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "email_address : anything@example.com ";
  
}
}
}


if (empty($_POST["dob"])) {
$dobErr = "Cannot be empty";
} else {
$dob = test_input($_POST["dob"]);
}
if (empty($_POST["gender"])) {
$genderErr = "At least one of them must be selected";
} else {
$gender = test_input($_POST["gender"]);
}
if (empty($_POST["degree"])) {
$degreeErr = "At least two of them must be selected";
} else {
$degree = test_input($_POST["degree"]);
}
if (empty($_POST["bloodgroup"])) {
$bloodgroupErr = "Must be seleted";
} else {
$bloodgroup = test_input($_POST["bloodgroup"]);
}


}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<h2></h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name">

 <span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail: <input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Date Of Birth: <input type="date" id="birthday" name="dob">
<span class="error">* <?php echo $dobErr;?></span>
<br><br>


 <br>Gender:
<input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>

 <br>
<br><br>Degree:
<input type="checkbox" name="degree" value="SSC">SSC
<input type="checkbox" name="degree" value="HSC">HSC
<input type="checkbox" name="degree" value="BSc">BSc
<input type="checkbox" name="degree" value="MSc">MSc
<span class="error">* <?php echo $degreeErr;?></span>
<br>
<br>BloodGroup:
<select id="bloodgroup" name="bloodgroup" size="2">
<option value="A-">A-</option>
<option value="O-">O-</option>
<option value="B-">B-</option>
<option value="AB-">AB-</option>
<option value="A+">A+</option>
<option value="O+">O+</option>
<option value="B+">B+</option>
<option value="AB+">AB+</option>

 </select>
<span class="error">* <?php echo $bloodgroupErr;?></span>
<br><br>



<input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $degree;
echo "<br>";
echo $bloodgroup;
echo"<br>";
echo $gender;
echo "<br>";
echo $dob;
echo"<br>";

?>
</body>
</html>