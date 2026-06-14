<?php

include 'connect.php';

$name = $_POST['name'];
$rollno = $_POST['rollno'];
$department = $_POST['department'];
$email = $_POST['email'];

$sql = "INSERT INTO students
(name, rollno, department, email)

VALUES

('$name','$rollno','$department','$email')";

mysqli_query($con, $sql);

header('location:index.php');

?>