<?php
    session_start();
    if (empty($_SESSION['email'])) {
        header('location:1loginpab.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dashboard</title>
</head>
<body>
    <h2>
        Selamat Datang di Penginapan Amelia
        <?=$_SESSION['email']?><br>
        <a href="logouttask.php">LOGOUT</a>
    </h2>
</body>
</html>
