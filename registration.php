<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registration_style.css">
</head>
<body>
    <form action="check_registration.php" method="POST">
        <h1>Registration Form</h1>
        <div>
            <label for="name">Name:</label>
            <input id="name" type="text" name="name" placeholder="John Smith">
        </div>
        <div>
            <label for="username">Username:</label>
            <input id="username" type="text" name="username" placeholder="john.smith1">
        </div>
        <div>
            <label for="email">Email address:</label>
            <input id="email" type="text" name="email" placeholder="john.smith@mail.com">
        </div>
        <div>
            <label for="password">Password:</label>
            <input id="password" type="text" name="password" placeholder="*******">
        </div>
        <div>
            <label for="repeat_password">Confirm password:</label>
            <input id="repeat_password" type="text" name="repeat_password" placeholder="*******">
        </div>
        <div>
            <input type="submit" value="Sign up">
        </div>
    </form>
</body>
</html>