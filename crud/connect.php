<?php
    $servername = "localhost"; //khai bao servername
    $username = "root"; //ten user dang nhap vao mysql (phpmyadmin)
    $password = ""; //mat khau
    $dbname = "wd18317";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>