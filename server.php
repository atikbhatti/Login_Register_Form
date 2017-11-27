<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "members";
//make Connection
$conn = mysqli_connect($server,$username,$password,$dbname);
//Check Connection
if($conn->connect_error){
	echo "Connection Not Working";
}
//select Databse
$select_db = mysqli_select_db($conn,$dbname)or die('Databse Problem');;
?>