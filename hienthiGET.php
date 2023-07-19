<?php
    $userName = $_GET['username'];
    $email = $_GET['email'];

    if (strlen($_GET['username']) < 3) {
        echo 'username khong duco ngan hon 3 ly tu';
    }

    if (filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
        echo 'Hello '.$userName, 'your email is '.$email;
    } else {
        echo 'Email khong hop le';
    }
?>