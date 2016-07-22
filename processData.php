<?php

$servername = "localhost";
$username = "root";
$password = "bigoldpasswords";
$dbname = "derek";
$words = $_POST['inText'];
$date = date('Y-m-d H:i:s');

$con = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno())
{
	printf("Connect fail: %s\n", mysqli_connect_error());
	exit();
}

if (mysqli_query($con, "INSERT INTO post (time, contents) VALUES ('$date', '$words')")===false)
{printf(mysqli_error($con));}

header("Location: http://siteofderek.chickenkiller.com/");
exit();
?>