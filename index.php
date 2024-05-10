
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
    <body>
        <div class="login-section">
            <form action="check_login.php" method="POST" id="loginForm">
                <input type="text" name="username" placeholder="login" required><br>
                <input type="password" name="password" placeholder="password" required><br>
                <input type="submit" value="Log in" id="btn">
            </form>
            <a href="registration.php">You don't have account? Sign up</a>
        </div>
    </body>
</html>