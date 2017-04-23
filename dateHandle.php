<!DOCTYPE html>
<html>
<head>
	<title>premierHandle</title>
	<meta charset="utf-8">
</head>
<body>
<?php
echo "today is: ".date("Y/m/d")."<br>";
echo "today is: ".date("Y.m.d")."<br>";
echo "today is: ".date("Y-m-d")."<br>";
echo "today is: ".date("l")."<br>";

echo "<br>";
echo "now the time is: ".date("ah:i:s");
echo "<br>";

?>

<?php
// date_default_timezone_set("Asia/Shanghai");
echo date_default_timezone_get(oid);
echo "<br>";

$d = mktime(9, 12, 58980000, 6, 10, 2015);
echo "the time is created is: ".date("Y-m-d ah:i:s", $d);

?>
<div class="footer">
	<p>© 1998-<?php echo date("Y"); ?></p>
	<!-- <?php include 'fileHandle.php'; ?> -->
</div>
</body>
</html>