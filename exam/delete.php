<?php
    require 'connect.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM flights WHERE flight_id=$id";
    $conn->exec($sql);

    header('Location: index.php');
?>
