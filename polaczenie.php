<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="koledy";	
					
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error)
	{
	die("Połączenie nie udane " . $conn->connect_error);
	}
	else echo "   ";
?>