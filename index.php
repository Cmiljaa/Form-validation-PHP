
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <form action="check_registration.php" method="POST">
        <input type="text" name="username" placeholder="login" required><br>
        <input type="password" name="password" placeholder="password" required><br>
        <input type="submit" value="Log in" id="btn">
    </form>
</body>
</html>