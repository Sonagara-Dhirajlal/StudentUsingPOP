<?php

$id = $_GET['id'];
$connection = mysqli_connect('localhost', 'root', '', 'student');
$query = "DELETE FROM `sdetail` WHERE `Id` = $id";
$row = mysqli_query($connection, $query);

if ($row > 0)
    return header("Location: ./index.php");
else
    echo "Error";
