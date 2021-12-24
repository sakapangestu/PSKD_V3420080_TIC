<?php
require('koneksi.php');

function registrasi($data)
{
    global $conn;
    $username = $data["username"];
    $password = $data["password"];
    $password_md5 = md5($password);
    $nama_lengkap = $data["nama_lengkap"];
    $email = $data["email"];

    //cek username sudah ada atau belom
    $result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah terdaftar!');
        </script>";
        return false;
    }
    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO admin VALUES ('', '$username', '$password_md5', '$nama_lengkap', '$email')");

    return mysqli_affected_rows($conn);

    echo "<script>
        alert('user baru berhasil ditambahkan');
        document.location.href = 'login.php';
        </script>";
}
