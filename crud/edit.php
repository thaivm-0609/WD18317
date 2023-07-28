<?php
    require 'connect.php';

    //lay ra ban ghi trong database
    $id = $_GET['id'];
    $user = $conn->query("SELECT * FROM users WHERE id='$id'")->fetch();

    //update ban ghi bang du lieu moi
    if (isset($_REQUEST['submit'])) { // neu click submit thi moi chay
        $username = $_REQUEST['username']; //lay data username
        $email = $_REQUEST['email']; //lay data email

        $sql = "UPDATE users SET name='$username',email='$email' WHERE id='$id'";
        $conn->exec($sql); //thuc thi cau lenh update

        header('Location: ./index.php'); //redirect ve trang index
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New user</title>
</head>
<body>
    <form action="./edit.php?id=<?= $user['id'] ?>" method="POST">
        <label>Name</label>
        <input type="text" value="<?= $user['name'] ?>" name="username">
        <label>Email</label>
        <input type="email" value="<?= $user['email'] ?>" name="email">
        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>