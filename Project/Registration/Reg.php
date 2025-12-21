<html>
<head>
<title>Hotel User Registration</title>
</head>

<body>
<h1>welcome to Registration </h1>

<?php
$fullname = $loginId = $email = $contact = $password = $role = "";
$nameerror = $loginerror = $emailerror = $contacterror = $passworderror = $roleerror = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["fullname"])) {
$nameerror = "Name is req";
} else {
$fullname = text_input($_POST["fullname"]);
if (!preg_match("/^[a-zA-Z ]*$/", $fullname)) {
$nameerror = "Only letters and white space allowed";
}
}

if (empty($_POST["loginId"])) {
$loginerror = " login ID is req";
} else {
$loginId = text_input($_POST["loginId"]);
if (!preg_match("/^[a-zA-Z0-9_]{4,20}$/", $loginId)) {
$loginerror = "Login ID must be 4–20 characters";
}
}

if (empty($_POST["email"])) {
$emailerror = "email is req";
} else {
$email = text_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailerror = "Invalid email format";
}
}

if (empty($_POST["contact"])) {
$contacterror = "contact number is req";
} else {
$contact = text_input($_POST["contact"]);
if (!is_numeric($contact)) {
$contacterror = "Only numeric value allowed";
}
}

if (empty($_POST["password"])) {
$passworderror = " password is req";
} else {
$password = text_input($_POST["password"]);
if (strlen($password) < 6) {
$passworderror = "Password must be at least 6 characters";
}
}

if (empty($_POST["role"])) {
$roleerror = "Select user role";
} else {
$role = text_input($_POST["role"]);
}
}

function text_input($data) {
return trim($data);
return $data;
}
?>

<form method="post" action="">
Full Name:
<input type="text" name="fullname" value="<?php echo $fullname; ?>">
<span style="color:red"><?php echo $nameerror; ?></span>
<br><br>

Login ID:
<input type="text" name="loginId" value="<?php echo $loginId; ?>">
<span style="color:red"><?php echo $loginerror; ?></span>
<br><br>

Email Address:
<input type="text" name="email" value="<?php echo $email; ?>">
<span style="color:red"><?php echo $emailerror; ?></span>
<br><br>

Contact Number:
<input type="text" name="contact" value="<?php echo $contact; ?>">
<span style="color:red"><?php echo $contacterror; ?></span>
<br><br>

Password:
<input type="password" name="password">
<span style="color:red"><?php echo $passworderror; ?></span>
<br><br>

User Role:
<select name="role">
<option value="">-- Select Role --</option>
<option value="Admin" <?php if ($role=="Admin") echo "selected"; ?>>Admin</option>
<option value="Guest" <?php if ($role=="Guest") echo "selected"; ?>>Guest</option>
</select>
<span style="color:red"><?php echo $roleerror; ?></span>
<br><br>

<input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" &&
empty($nameerror) &&
empty($loginerror) &&
empty($emailerror) &&
empty($contacterror) &&
empty($passworderror) &&
empty($roleerror)) {

echo "<h3>Registration Successful!</h3>";
echo "Name: $fullname <br>";
echo "Login ID: $loginId <br>";
echo "Email: $email <br>";
echo "Contact: $contact <br>";
echo "Role: $role <br>";
echo "Registration Date: " . date("Y-m-d");
}
?>

</body>
</html>
