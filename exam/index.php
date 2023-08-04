<?php
    require 'connect.php'; //ket noi vs db

    $flights = $conn->query("SELECT * FROM flights
        LEFT JOIN airlines ON airlines.airline_id = flights.airline_id")->fetchAll(); //query du lieu
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List flights</title>
    <script type="application/javascript">
        function confirmDelete() {
            return confirm('Bạn có chắc chắn muốn xoá ko?');
        }
    </script>
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
                <td><?=$flight['airline_name']?></td>
                <td>
                    <a href="./edit.php?id=<?=$flight['flight_id']?>">Edit</a>
                    <a 
                        href="./delete.php?id=<?=$flight['flight_id']?>"
                        onclick="return confirmDelete()"
                    >
                        Delete
                    </a>   
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>