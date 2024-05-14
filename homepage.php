<?php 

require_once 'config.php';

session_start();

$orderby = 'name';

if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}

$sql = "SELECT * FROM users ORDER BY $orderby";

$run = $base -> query($sql);

$results = $run -> fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <table>
        <h1>User data</h1>
        <tbody>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Created at</th>
            </tr>
            <?php foreach($results as $result): ?>
                <tr>
                    <td><?= $result['name']; ?></td>
                    <td><?= $result['username']; ?></td>
                    <td><?= $result['email']; ?></td>
                    <td><?= $result['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="log-out">
        <form action="log_out.php">
            <button>Log out</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>