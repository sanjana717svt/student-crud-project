<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <h1>Student Management CRUD Application</h1>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Student Management System</h1>

    <form action="insert.php" method="POST">

        <input
        type="text"
        name="name"
        placeholder="Student Name"
        required>

        <br><br>

        <input
        type="text"
        name="rollno"
        placeholder="Roll Number"
        required>

        <br><br>

        <input
        type="text"
        name="department"
        placeholder="Department"
        required>

        <br><br>

        <input
        type="email"
        name="email"
        placeholder="Email"
        required>

        <br><br>

        <button type="submit">
            Add Student
        </button>

    </form>
    <br><br>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Department</th>
    <th>Email</th>
    <th>Delete</th>
    <th>Edit</th>
</tr>

<?php

$sql = "SELECT * FROM students";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['rollno']; ?></td>

<td><?php echo $row['department']; ?></td>

<td><?php echo $row['email']; ?></td>
<td>
    <a href="delete.php?deleteid=<?php echo $row['id']; ?>">
        Delete
    </a>
</td>

<td>
    <a href="update.php?updateid=<?php echo $row['id']; ?>">
        Edit
    </a>
</td>

</tr>

<?php
}
?>

</table>

</body>
</html>