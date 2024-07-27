<?php

$connection = mysqli_connect('localhost', 'root', '', 'student');
$query = "SELECT * FROM `sdetail`";
$result = mysqli_query($connection, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>

<body>
    <form action="./insert.php" method="post">

        <label>Name : </label>
        <input type="text" name="name" autofocus />

        <label>RollNo. : </label>
        <input type="text" name="rollno" />

        <label for="course">Course : </label>
        <select name="course">
          <option value="BCA">BCA</option>
          <option value="BBA">BBA</option>
          <option value="BCOM">BCOM</option>
        </select>

        <label>Division : </label>
        <input type="text" name="division" />

        <input type="submit" value="Submit">
    </form>

    <br>
    <br>

    <table border="1">
        <thead>
            <th>Name</th>
            <th>RollNo</th>
            <th>Course</th>
            <th>Division</th>
            <th>Delete</th>
            <th>Update</th>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?= $user['Name'] ?></td>
                    <td><?= $user['RollNo'] ?></td>
                    <td><?= $user['Course'] ?></td>
                    <td><?= $user['Division'] ?></td>
                    <td><a href="./delete.php?id=<?= $user['Id'] ?>">Delete</a></td>
                    <td><a href="./updatePage.php?id=<?= $user['Id'] ?>">Update</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>