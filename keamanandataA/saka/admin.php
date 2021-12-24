<?php
session_start();
?>
<html>

<head>
    <title> Zona Admin </title>
</head>

<body>

    <div style="text-align:center">
        <h2>Zona Admin</Area></h2>
        <p><a href="index.php">Home</a> / <a href="logout.php">Logout</a></p>

        <p>Selamat datang di Zona Admin, Anda Login dengan username <?php echo $_SESSION['admin']; ?></p>
    </div>

</body>

</html>