<?php
$servername = "localhost";
$username = "root";
$password = "bigoldpasswords";
$dbname = "derek";
$date = date('Y-m-d H:i:s');

$con = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM post";

$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($result)) 
{
	echo $row['time'] . "     ";
	echo $row['contents'];
	echo "<br>";
	echo "<br>";
}

?>