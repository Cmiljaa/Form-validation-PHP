<?php require_once 'check_registration.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registration_style.css">
</head>
<body>
    <form method="POST">
        <h1>Registration Form</h1>
        <div>
            <label for="name">Name:</label>
            <input id="name" type="text" name="name" placeholder="John Smith" value="<?php echo $name; ?>" required>
            <span><?php foreach($nameer as $error) echo $error ."<br>"; ?></span>
        </div>
        <div>
            <label for="username">Username:</label>
            <input id="username" type="text" name="username" placeholder="john.smith1" value="<?php echo $username; ?>" required>
            <span><?php foreach($usernameer as $error) echo $error ."<br>"; ?></span>
        </div>
        <div>
            <label for="email">Email address:</label>
            <input id="email" type="text" name="email" placeholder="john.smith@mail.com" value="<?php echo $email; ?>" required>
            <span><?php foreach($emailer as $error) echo $error ."<br>"; ?></span>
        </div>
        <div>
            <label for="password">Password:</label>
            <input id="password" type="password" name="password" placeholder="*******" value="<?php echo $password; ?>" required>
            <span><?php foreach($passworder as $error) echo $error ."<br>"; ?></span>
        </div>
        <div>
            <label for="repeat_password">Confirm password:</label>
            <input id="repeat_password" type="password" name="repeat_password" placeholder="*******" value="<?php echo $repeatPassword; ?>" required>
            <span><?php foreach($rpassworder as $error) echo $error ."<br>"; ?></span>
        </div>
        <div>
            <input type="submit" value="Sign up" id="btn">
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>