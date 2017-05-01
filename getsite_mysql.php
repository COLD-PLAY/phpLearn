<?php
$servername = 'localhost';
$username = 'root';
$password = 'liaozhou1998';
$dbname = 'COLDPLAY';

$q = isset($_GET['q'])?intval($_GET['q']):'';

if (empty($q)) {
	echo "please select a site";
	exit;
}
try {
	$conn = new new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM WEBSITES WHERE ID='$q'";
	$result = $conn->query($sql);

	while ($website = $result->fetch()) {
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['url'] . "</td>";
		echo "<td>" . $row['alexa'] . "</td>";
		echo "<td>" . $row['country'] . "</td>";
		echo "</tr>";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>