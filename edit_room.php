<?php
$roomNumber = "";
$floor = "";
$view = "";
$type= "";
$status="";
$error="";

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
if (empty($_POST["roomNumber"]) || empty($_POST["floor"]) || empty($_POST["view"]) || empty($_POST["type"]) || empty($_POST["status"])) 
{ $error = "All fields are required!"; } 
else {
$roomNumber   = $_POST["roomNumber"];
$floor   = $_POST["floor"];
$view = $_POST["view"];
$status= $_POST["status"];
}
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
echo "<h3>Input:</h3>";
echo "roomNumber: " . $roomNumber. "<br>";
echo "floor: " . $floor . "<br>";
echo "view: " . $view . "<br>";
echo "status: " . $status. "<br>";

}
?>

