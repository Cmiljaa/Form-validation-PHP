<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/registration_style.css">
</head>
<body>
    <form method="POST" action="check_registration.php">
        <h1>Registration Form</h1>
        <div>
            <label for="name">Name:</label>
            <input id="name" type="text" name="name" placeholder="John Smith" required>
        </div>
        <div>
            <label for="username">Username:</label>
            <input id="username" type="text" name="username" placeholder="john.smith1" required>
        </div>
        <div>
            <label for="email">Email address:</label>
            <input id="email" type="text" name="email" placeholder="john.smith@mail.com" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input id="password" type="password" name="password" placeholder="*******" required>
        </div>
        <div>
            <label for="repeat_password">Confirm password:</label>
            <input id="repeat_password" type="password" name="repeat_password" placeholder="*******" required>
        </div>
        <div>
            <input type="submit" value="Sign up">
        </div>
    </form>
</body>
</html>