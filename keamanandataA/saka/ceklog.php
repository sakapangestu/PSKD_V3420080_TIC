<?php
session_start();
require('koneksi.php');
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $data = mysqli_query($conn, "SELECT role FROM login_mhs where username='$user' AND password = '$pass'");
    if (mysqli_num_rows($data) === 0) {
        echo
        '<script>alert("Username atau Password yang Anda Masukkan Error!"); document.location="index.php";</script>';
    } else {
        $row = mysqli_fetch_assoc($data);
        if ($row['role'] == "admin") {
            $_SESSION['admin'] = $user;
            echo '<script language="javascript">alert("kamu sudah berhasil Login Admin!"); document.location="admin.php";</script>';
        } else {
            $_SESSION['peserta'] = $user;
            echo '<script language="javascript">alert("kamu sudah berhasil Login Peserta!"); document.location="member.php";</script>';
        }
    }
}