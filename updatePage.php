<?php

$id = $_GET['id'];
$connection = mysqli_connect('localhost', 'root', '', 'student');
$query = "SELECT * FROM `sdetail` WHERE `Id` = $id";
$result = mysqli_query($connection, $query);

$user = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="./update.php" method="post">

<input type="hidden" name="id" value="<?= $user['Id'] ?>">

<label>Name : </label>
<input type="text" name="name" value="<?= $user['Name'] ?>" autofocus />

<label>RollNo. : </label>
<input type="text" name="rollno" value="<?= $user['RollNo'] ?>" />

<label for="course">Course : </label>
<select name="course" value="<?= $user['Course'] ?>">
  <option value="BCA">BCA</option>
  <option value="BBA">BBA</option>
  <option value="BCOM">BCOM</option>
</select>

<label>Division : </label>
<input type="text" name="division" value="<?= $user['Division'] ?>" />

<input type="submit" value="Update">
</form>
</body>

</html>