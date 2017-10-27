<?php

	$dbname= 'sistema_ce';
	$host = 'localhost';
	$usuario = 'root';
	$senha = '';

	error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

	$conn = new mysqli($host, $usuario, $senha, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
//	mysqli_query($id_conexao, "SET NAMES 'utf8'");
?>
