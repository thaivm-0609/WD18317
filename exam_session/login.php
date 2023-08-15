<?php
    session_start(); //bắt đầu session

    if (isset($_POST['submit'])) {
        $username = $_POST['username']; //lay username tu form login
        $password = $_POST['password']; //lay password tu form login

        if ($username === 'admin' && $password === '123456') {
            // setcookie();
            $_SESSION['user'] = $username; // set gia tri cho session, tuong duong vs setcookie

            header('location: index.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="./login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>