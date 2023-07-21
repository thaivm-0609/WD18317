<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dien thong tin</title>
</head>
<body>
    <form action="hienthiGET.php" method="GET">
        <label for="user">User
            <input type="text" name="username">
        </label>
        <label for="user">Email
            <input type="email" name="email">
        </label>
        <!-- truyen array qua form -->
        <label for="favorite">Ban thich gi</label>
        <select name="favorite[]" multiple>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <input type="submit">
    </form>
</body>
</html>