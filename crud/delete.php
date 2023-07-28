<?php
    require 'connect.php';

    $id = $_GET['id']; //lay id can xoa tu url
    $sql = "DELETE FROM users WHERE id='$id'"; //cau query de xoa ban ghi
    $conn->exec($sql); //thuc thi cau query

    header('Location: ./index.php');
?>