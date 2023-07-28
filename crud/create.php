<?php
    require 'connect.php';

    if (isset($_REQUEST['submit'])) {
        $username = $_REQUEST['username']; //lay username tu form
        $email = $_REQUEST['email']; //lay email tu form
        $sql = "INSERT INTO users (name, email) VALUES ('$username', '$email')"; //cau query insert database
        $conn->exec($sql); //chay cau lenh SQL
    
        header('Location: ./index.php'); //redirect ve trang index.php
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
    <form action="./create.php" method="POST">
        <label>Name</label>
        <input type="text" name="username">
        <label>Email</label>
        <input type="email" name="email">
        <button type="submit" name="submit">Create</button>
    </form>
</body>
</html>