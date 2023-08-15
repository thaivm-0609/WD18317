<?php
    session_start(); //bat dau session

    if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
        header('location: login.php');
    }
    
    require 'connect.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM flights WHERE flight_id=$id";
    $conn->exec($sql);

    header('Location: index.php');
?>
