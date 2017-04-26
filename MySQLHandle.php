<!DOCTYPE html>
<html>
<head>
	<title>MySQL handle</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	$servername = 'localhost';
	$username = 'root';
	$password = 'liaozhou1998';
	$dbname = 'MYDBPDO';

	//////////////////////////////// create a database named MYDBPDO
	// try {
	// 	$conn = new PDO("mysql:host=$servername;dbname=COLDPLAY", $username, $password);
	// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	$sql = 'CREATE DATABASE MYDBPDO';
	// 	$conn->exec($sql);
	// 	// echo 'Connected successfully';
	// 	echo 'Database created successfully';
	// } catch (PDOException $e) {
	// 	echo $e->getMessage();
	// }

	//////////////////////////////// create a table named MYGUESTS
	// try {
	// 	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// 	// set the PDO error mode to exception
	// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	// sql to create table
	// 	$sql = 'CREATE TABLE MYGUESTS(
	// 	ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	// 	FIRSTNAME VARCHAR(30) NOT NULL,
	// 	LASTNAME VARCHAR(30) NOT NULL,
	// 	EMAIL VARCHAR(50),
	// 	REG_DATE TIMESTAMP)';

	// 	// use exec() because no results are returned
	// 	$conn->exec($sql);
	// 	echo 'Table MYGUESTS created successfully';
	// } catch (PDOException $e) {
	// 	echo $e->getMessage();
	// }

	
	?>	
</body>
</html>