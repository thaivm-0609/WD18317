<?php
    $servername = "localhost"; //khai bao servername
    $username = "root"; //ten user dang nhap vao mysql (phpmyadmin)
    $password = ""; //mat khau
    $dbname = "wd18317";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully"; 

        // tao database
        // $sql = 'CREATE DATABASE wd18317'; //dòng lệnh tạo database
        // $conn->exec($sql); //thực thi câu lệnh $sql
        // echo "Create database successfully";

        // cau lenh tao table users 
        // $createTable = 'CREATE TABLE users (
        //     id INT AUTO_INCREMENT PRIMARY KEY, 
        //     name VARCHAR(30),
        //     email VARCHAR(50)
        // )';
        // $conn->exec($createTable); //thuc thi cau lenh
        // echo "Create table Users successfully";

        // insert du lieu vao bang users
        $user = $_REQUEST['username']; //lay username tu form
        $email = $_REQUEST['email']; //lay email tu form
        $insertUser = "INSERT INTO users (name, email)
        VALUES ('$user', '$email')";
        
        $conn->exec($insertUser); //them du lieu thanh cong
        echo "Them du lieu thanh cong";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>