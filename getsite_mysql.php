<?php

// echo "hello";
$servername = 'localhost';
$username = 'root';
$password = 'liaozhou1998';
$dbname = 'COLDPLAY';

$q = isset($_GET['q']) ? intval($_GET['q']) : '';

if (empty($q)) {
	echo "please select a site";
	exit;
}
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM WEBSITES WHERE ID='$q'";
	$result = $conn->query($sql);

	while ($website = $result->fetch()) {
		echo '<tr style="background-color: #555555; color: white;">
				<th>ID</th>
				<th>NAME</th>
				<th>SITE URL</th>
				<th>ALEXA</th>
				<th>COUNTRY</th>
			</tr>';
		echo "<td>" . $website['ID'] . "</td>";
		echo "<td>" . $website['NAME'] . "</td>";
		echo "<td>" . $website['URL'] . "</td>";
		echo "<td>" . $website['ALEXA'] . "</td>";
		echo "<td>" . $webssite['COUNTRY'] . "</td>";
		
	}
	echo "</table>";
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>