<?php
$connect=mysqli_connect('bigd', 'derek', 'bigoldpasswords', 'derek');

if(mysqli_connect_errno($connect))
{echo 'Failed to connect';}
?>