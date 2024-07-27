<?php

$id = $_POST['id'];
$name = $_POST['name'];
$rollno = $_POST['rollno'];
$course = $_POST['course'];
$division = $_POST['division'];

$connection = mysqli_connect('localhost', 'root', '', 'student');
$query = "UPDATE `sdetail` SET `Name` = '$name', `RollNo` = '$rollno', `Course` = '$course', `Division` = '$division' WHERE `Id` = $id ";
$row = mysqli_query($connection, $query);

if ($row > 0)
    return header('Location: ./index.php');
else
    echo "Failed to update data";
