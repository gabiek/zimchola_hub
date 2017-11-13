<?php


 $servername = "localhost";
$username = "zimschola";
$password = "zimschola";
$dbname = "zimschola";


$connect = new mysqli($servername, $username, $password, $dbname);

if(mysqli_connect_errno ($connect))
	{
		echo 'Failed to connect';
	}
 
?>

