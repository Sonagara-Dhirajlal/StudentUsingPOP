<?php

$name = $_POST['name'];
$rollno = $_POST['rollno'];
$course = $_POST['course'];
$division = $_POST['division'];

$connection = mysqli_connect('localhost', 'root', '', 'student');
$query = "INSERT INTO `sdetail` (`Name`, `RollNo`, `Course`, `Division`) VALUES ('$name', '$rollno', '$course', '$division');";
$row = mysqli_query($connection, $query);

if ($row > 0)
    return header('Location: ./index.php');
else
    echo "Error";
