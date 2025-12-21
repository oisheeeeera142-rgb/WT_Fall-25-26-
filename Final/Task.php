<!DOCTYPE html>
<html>
<head>
<title> Registration</title>
</head>

<body>
<h1>welcome to Registration </h1>

<?php
$name ="";
$email = "";
$dd = $mm = $yyyy = "";
$gender="";
$degree=[];

$nameerror ="";
$emailerror = "";
$dateofbirtherror = "";
$gendererror="";
$degreeerror="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["name"])) {
$nameerror = "Name cannot be empty";
} 
else if (strlen($_POST["name"]) < 2) {
$nameerror= "Name contain at least two words";
}
else {
$name = test_input($_POST["name"]);
if (!preg_match("/^[A-Za-z ]*$/", $name)) {
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

if (empty($_POST["dd"]) || empty($_POST["mm"]) || empty($_POST["yyyy"])) {
$dateofbirtherror = "Date of birth cannot be empty";
} else {
$dd = test_input($_POST["dd"]);
$mm = test_input($_POST["mm"]);
$yyyy = test_input($_POST["yyyy"]);

if ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yyyy < 1953 || $yyyy > 1998) {
$dateofbirtherror = "Invalid date of birth";
}
}

if (empty($_POST["gender"])) {
$gendererror = "At least one gender must be selected";
} else {
$gender = test_input($_POST["gender"]);
}

if (empty($_POST["degree"])) {
$degreeerror = "At least two degrees must be selected";
}
else if (count($_POST["degree"]) < 2) {
$degreeerror = "At least two degrees must be selected";
}
else {
$degree = $_POST["degree"];
}
if (empty($_POST["bloodgroup"])) {
} else {
$bloodgorup = test_input($_POST["bloodgroup"]);
}

}

function test_input($data) {
return trim($data);
}
?>

<form method="post" action="">
Name:
<input type="text" name="name" value="<?php echo $name;?>">
<?php echo $nameerror; ?>
<br><br>

Email Address:
<input type="text" name="email" value="<?php echo $email;?>">
<?php echo $emailerror; ?>
<br><br>

Date of Birth:
<input type="number" name="dd" min="1" max="31" placeholder="dd">
<input type="number" name="mm" min="1" max="12" placeholder="mm">
<input type="number" name="yyyy" min="1900" max="1953" placeholder="yyyy">
<?php echo $dateofbirtherror; ?>
<br><br>


Gender:
<input type="radio" name="gender" value="Male" >
<input type="radio" name="gender" value="Female">
<input type="radio" name="gender" value="Other" >
<?php echo $gendererror; ?>
<br><br>
Degree:
<input type="checkbox" name="degree[]" value="SSC"> SSC
<input type="checkbox" name="degree[]" value="HSC"> HSC
<input type="checkbox" name="degree[]" value="BSc"> BSc
<input type="checkbox" name="degree[]" value="MSc"> MSc
<?php echo $degreeerror; ?>
<br><br>
Bloodgroup:
<select name="Bloodgroup">
<option value="">-- Select blood group --</option>

<option value="A+" <?php if ($bloodgroup=="A+") echo "selected"; ?>>A+</option>
<option value="A-" <?php if ($bloodgroup=="A-") echo "selected"; ?>>A-</option>
<option value="other" <?php if ($bloodgroup=="other") echo "selected"; ?>>other</option>
</select>
<?php echo $bloodgrouperror; ?>
<br><br>



<input type="submit" name="submit" value="Submit">
</form>

<?php
if(
$_SERVER["REQUEST_METHOD"]== "POST" &&
empty($nameerror) &&
empty($emailerror) &&
empty($dateofbirtherror) &&
empty($gendererror) &&
empty($degreeerror) &&
empty($bloodgrouperror)

){
echo "<h3>Your Input:</h3>";
echo "Name: ".$name."<br>";
echo "Email: ".$email."<br>";
echo "Date of Birth: ".$dd."-".$mm."-".$yyyy."<br>";
echo "Gender: ".$gender."<br>";
echo "Degree: ".$degree."<br>";
echo "Bloodgroup: ".$bloodgroup."<br>"; 

}
?>

</body>
</html>
