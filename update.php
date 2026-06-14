<?php

include 'connect.php';

$id = $_GET['updateid'];

$sql = "SELECT * FROM students WHERE id=$id";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$rollno = $row['rollno'];
$department = $row['department'];
$email = $row['email'];

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $department = $_POST['department'];
    $email = $_POST['email'];

    $sql = "UPDATE students SET

    name='$name',
    rollno='$rollno',
    department='$department',
    email='$email'

    WHERE id=$id";

    mysqli_query($con,$sql);

    header('location:index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Update Student</h1>

<form method="POST">

<input
type="text"
name="name"
value="<?php echo $name; ?>"
required>

<br><br>

<input
type="text"
name="rollno"
value="<?php echo $rollno; ?>"
required>

<br><br>

<input
type="text"
name="department"
value="<?php echo $department; ?>"
required>

<br><br>

<input
type="email"
name="email"
value="<?php echo $email; ?>"
required>

<br><br>

<button type="submit" name="submit">
Update
</button>

</form>

</body>
</html>