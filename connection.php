<?php 
$serverName ="localhost";
$userName ="root";
$password ="";
$dbName ="lblog_33351065_gamedatabase";
$conn = new mysqli($serverName, $userName, $password,$dbName);
// $link = @mysqli_connect($serverName, $userName, $password, $dbName) or die("ERROR: Unable to connect: " . mysqli_connect_error());
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "";
?>
