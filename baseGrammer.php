<html>
<head>
<title>hello php</title>
</head>
<body>
	<?php
	echo "hello php<br>";

	function myTest() {
		static $x = 0;
		echo $x;
		echo "<br>";
		$x++;
	}

	myTest();
	myTest();
	myTest();
	myTest();

	define("hello", "hello php");
	echo hello, "<br>";

	$text = "hello";
	$text .= ", liaozhou";

	echo $text;
	echo "<br>";

	$x = 100;
	$y = "100";

	var_dump($x == $y);
	echo "<br>";
	var_dump($x === $y);
	echo "<br>";
	var_dump($x != $y);
	echo "<br>";
	var_dump($x !== $y);
	echo "<br>";

	$a = "50";
	$b = 90;

	var_dump($a > $b);
	echo "<br>";
	var_dump($a < $b);
	echo "<br>";
	?>
</body>
</html>