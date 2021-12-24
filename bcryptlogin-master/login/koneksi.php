<!--
Author : Aguzrybudy
Created : Jum'at, 14-April-2017
Title : Login dengan Bcrypt
-->
<?php
	$host="localhost";
	$user="root";
	$pass="";
	$database="dbphp7";
	$mysqli=new mysqli($host,$user,$pass,$database);
	if (mysqli_connect_errno()) {
	  trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); 
	}
?>