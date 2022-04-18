<?php
include('user.php');

$editid = $_REQUEST['id'];


$edtuser = new User();


$edituser = $edtuser->edituser($editid);

$alldata = mysqli_fetch_assoc($edituser);

//print_r($alldata);

if (isset($_POST['submit'])) {
    $edtuser->updateuser($_POST);
}

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
    <form action="" method="POST">
        <input type="hidden" name="ID" value="<?php echo $alldata['ID']; ?>">
        <input type="text" name="username" value="<?php echo $alldata['username']; ?>">
        <input type="email" name="email" value="<?php echo $alldata['email']; ?>">
        <input type="password" name="password" value="<?php echo $alldata['pass']; ?>">
        <input type="submit" name="submit" value="update">

    </form>
</body>

</html>