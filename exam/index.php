<?php
    require 'connect.php'; //ket noi vs db

    $flights = $conn->query("SELECT * FROM flights")->fetchAll(); //query du lieu
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List flights</title>
</head>
<body>
    <button><a href="./create.php">Create new flight</a></button>
    <table>
        <tr>
            <th>ID</th>
            <th>Number</th>
            <th>Image</th>
            <th>Total passengers</th>
            <th>Description</th>
            <th>Airline</th>
            <th>Action</th>
        </tr>
        <?php foreach ($flights as $flight) { ?>
            <tr>
                <td><?=$flight['flight_id']?></td>
                <td><?=$flight['flight_number']?></td>
                <td><img src="<?=$flight['image']?>" height="50"></td>
                <td><?=$flight['total_passengers']?></td>
                <td><?=$flight['description']?></td>
                <td><?=$flight['airline_id']?></td>
                <td>
                    <a>Edit</a>
                    <a>Delete</a>   
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>