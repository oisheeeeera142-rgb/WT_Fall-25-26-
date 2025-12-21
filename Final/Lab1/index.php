html>
<head>
<title> Registration</title>
</head>

<body>
<h1>welcome to Registration </h1>

<?php
$name ="";
$email = "";
$dateofbirth = "";
$Gender="";
$degree="";
$bloodgroup="";

$nameerror ="";
$emailerror = "";
$dateofbirtheror = "";
$Gendererror="";
$bloodgrouperror="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["name"])) {
$nameerror = "Name cannot be empty";
} 
else if (strlen($_post["name"]) < 2) {
$nameerror= "Name contain at leat two words";
}
else 
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-z,A-Z ]*$/", $name)) {
$nameerror = "must start with a letter";
}
}

if (empty($_POST["email"])) {
$emailerror = "email cannot be empty";
} else {
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailerror = "Invalid email format(anything@example.com)";
}
}


if (empty($_POST["Date of Birth "])) {
$dateofbirtherror = " date of birth cannot be empty";
} else {
$dateofbirth= test_input($_POST["dateofbirth"]);{
$dateofbirtherror = "must be valid numbers(1-31,mm:1-2,yyyy:1953-1998)";
}
}

if (empty($_POST["gender"])) {
$gendererror = "Select gender";
} else {
$gender = test_input($_POST["gender"]);{
$gendererror="at least one of them must be selected"
}
}
if (empty($_POST["degree"])) {
$degreeerror = "Select degree";
} else {
$degree = test_input($_POST["degree"]);{
$degreeerror="at least one of them must be selected"
}
}
if (empty($_POST["bloodgroup"])) {
$degreeerror = "Select degree";
} else {
$degree = test_input($_POST["bloodgroup"]);{
$degreeerror="at least one of them must be selected"
}
}
function test_input($data) {
return trim($data);
return $data;
}
?>

<form method="post" action="">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<?php echo $nameerror; ?>
<input type="submit" name="submit" value="Submit">

Email Address:
<input type="text" name="email" value="<?php echo $email;?>">
<?php echo $emailerror; ?>
<input type="submit" email="submit" value="Submit">


Date of Birth:
<select name="Dateofbirth">
<option value="">-- Select dateofbirth --</option>
<option value="dd" <?php if ($dateofbirth=="dd") echo "selected"; ?>>dd</option>
<option value="mm" <?php if ($dateofbirth=="mm") echo "selected"; ?>>yyyy</option>
</select>
<input type="submit" dateofbirth="submit" value="Submit">

User Gender:
<select name="gender">
<option value="">-- Select gender --</option>
<option value="Male" <?php if ($gender=="Male") echo "selected"; ?>>Male</option>
<option value="Female" <?php if ($gender=="Female") echo "selected"; ?>>Female</option>
<option value="other" <?php if ($gender=="other") echo "selected"; ?>>other</option>
</select>
<input type="submit" Usergender="submit" value="Submit">
degree:
<select name="degree">
<option value="">-- Select degree --</option>
<option value="SSC" <?php if ($degree=="SSC") echo "selected"; ?>>SSC</option>
<option value="HSC" <?php if ($degree=="HSC") echo "selected"; ?>>HSC</option>
<option value="BSC" <?php if ($degree=="BSC") echo "selected"; ?>>BSC</option>
<option value="MSC" <?php if ($degree=="MSC") echo "selected"; ?>>MSC</option>
</select>
<input type="submit" degreeh="submit" value="Submit">

<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($nameerror))
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($emailerror))
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($dateofbirtherror))
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($gendererror))
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($degreeerror))
{
echo "<h3> Your Input: </h3>";
echo "Name: ".$name. "<br>";
echo "Name: ".$email. "<br>";
echo "Name: ".$dateofbirtherror. "<br>";
echo "Name: ".$gendererror. "<br>";
echo "Name: ".$degree. "<br>";
}
?>

</body>
</form>
</html>