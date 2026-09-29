<?php 
$host = "localhost";
$username = "root";
$password = "";
$database ="student-management";
$conn = mysqli_connect($host,$username,$password,$database);
 if (!$conn) {
    die("data base connection failed: " . mysqli_connect_error());
 }
 echo "databse connected succssfully!";
 ?>