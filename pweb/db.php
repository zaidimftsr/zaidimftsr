<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'marketplace';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('gagal terhubung database');
?>