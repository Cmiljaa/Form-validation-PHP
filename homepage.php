<?php 

require_once 'config.php';

session_start();

if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
    header("Location: index.php");
    exit();
}

$queries = mysqli_query($base, "SELECT * FROM users");

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
            <?php while($row = mysqli_fetch_assoc($queries)): ?>
                <tr>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['username']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['created_at']; ?></td>
                </tr>
            <?php endwhile; ?>
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