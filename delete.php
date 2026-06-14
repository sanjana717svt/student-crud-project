<?php

include 'connect.php';

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM students WHERE id=$id";

    mysqli_query($con,$sql);

    header('location:index.php');
}

?>