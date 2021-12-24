<!--
Author : Aguzrybudy
Created : Jum'at, 14-April-2017
Title : Login dengan Bcrypt
-->

<?php
	session_start();
	session_destroy();
	header('location:index.php');
?>