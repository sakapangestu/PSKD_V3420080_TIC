<?php
session_start();
?>
<html>

<head>
    <title>Zona Peserta</title>
</head>

<body>

    <div style="text-align:center">
        <h2>Zona Peserta</h2>
        <p><a href="index.php">Home</a> / <a href="logout.php">Logout</a></p>

        <p>Selamat datang di Zona Peserta, Anda Login dengan username <?php echo $_SESSION['peserta']; ?></p>
    </div>

</body>

</html>