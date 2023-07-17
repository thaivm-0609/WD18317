<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach users</title>
</head>
<body>
    <?php
    $date = date('d-m-Y');

        $users = [
            [
                'name' => 'thai1',
                'email' => 'thaivm2@email.com',
                'gender' => 'male',
                'phone number' => '0123456789',
                'color' => 'red',
            ],
            [
                'name' => 'thai2',
                'email' => 'thaivm22@email.com',
                'gender' => 'male',
                'phone number' => '0123456789',
                'color' => 'yellow',
            ],
            [
                'name' => 'thai3',
                'email' => 'thaivm23@email.com',
                'gender' => 'male',
                'phone number' => '0123456789',
                'color' => 'green',
            ],
        ];
    ?>
    <h1> <?php echo $date ?> </h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Phone number</th>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr style="color: <? echo $user['color']?>">
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['gender'] ?></td>
                <td><?php echo $user['phone number'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>