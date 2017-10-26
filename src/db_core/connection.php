<?php
//by: https://www.w3schools.com/php/php_mysql_insert.asp
function executeQuery($query){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sistema_ce";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 


	if ($conn->query($query) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $query . "<br>" . $conn->error;
	}

	$conn->close();
}
?>