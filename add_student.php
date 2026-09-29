<?php
require "db.php";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$semester = $_POST['semester'];
$address = $_POST['address'];
$sql = "INSERT INTO students (name,email,phone,department,semester,address)  VALUES ('$name','$email','$phone','$department','$semester','$address')";

    
if (mysqli_query($conn, $sql)) {
    echo "students add successfully!";
}
    else { 
        echo "error :";
        mysqli_error($conn);

    }
    ?>