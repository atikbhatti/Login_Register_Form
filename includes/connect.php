<?php 
$server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "members";

// Create Connection
$conn = mysqli_connect($server, $db_username, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
	echo "Could not connect to database server";
}

// Select Databse
$select_db = mysqli_select_db($conn,$dbname) or die('Could not connect to databse');;
?>