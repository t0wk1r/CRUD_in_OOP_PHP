<?php
include('user.php');

$view = new User();


$viewuser = $view->viewuser();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border='1' align='center'>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Pass</th>
            <th>Action</th>
        </tr>
        <?php
        while ($info = mysqli_fetch_assoc($viewuser)) {

        ?>
            <tr>
                <td><?php echo $info['username']; ?></td>
                <td><?php echo $info['email']; ?></td>
                <td><?php echo $info['pass']; ?></td>
                <td>

                    <a href="edit.php?id=<?php echo $info['ID']; ?>">Edit</a>||
                    <a href="delete.php?id=<?php echo $info['ID']; ?>">Delete</a>
                </td>
            </tr>
        <?php

        }
        ?>
    </table>
</body>

</html>