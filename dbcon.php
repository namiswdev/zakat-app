<?php
 // Create connection
$servername = "localhost";
$name = "root";
$password ="";

try{
	$conn = new PDO("mysql:host=$servername;dbname=zakat",$name,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//echo "Connected successfully";
}
catch(PDOException  $e)
{
	echo "Connection failed: " . $e->getMessage();
}
?>