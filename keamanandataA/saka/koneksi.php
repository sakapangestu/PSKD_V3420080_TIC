<?php
$conn = mysqli_connect("localhost", "root", "", "mahasiswa");

//check connection
if (mysqli_connect_errno()) {
    echo "koneksi database error : " . mysqli_connect_error();
}