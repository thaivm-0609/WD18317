<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hien thi thong tin user</title>
</head>
<body>
    <?php @include '../test/users.php'; //duong dan tuong doi?> 
    <?php @include 'C:\xampp\htdocs\WD18317\test\users.php'; //duong dan tuyet doi?> 
    
    <p>Ten:</p> 
    <p> <?= $user['name'] ?> </p>
    <br>
    <p>Email</p>
    <p> <?= $user['email'] ?> </p>
</body>
</html>