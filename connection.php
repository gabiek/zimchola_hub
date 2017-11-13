<?php
 $servername = "localhost";
$username = "zimschola";
$password = "zimschola";
$dbname = "zimschola";


$connect = mysqli_connect
($servername, $username, $password, $dbname);

if(mysqli_connect_errno ($connect))
	{
		echo 'Failed to connect';
	}
 
?>