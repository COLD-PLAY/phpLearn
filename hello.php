<?php

define('pi', 3.14159265, true);
// echo $_POST["name"];
// echo "<br>";
// echo $_POST["email"];

// echo $_GET["name"];
// echo "<br>";
// echo $_GET["email"];
// echo 'hello sublime text3'
$para = array();
$para[0] = 'liaozhou';
$para[1] = 'zhoujielun';

// echo count($para);

// echo date('Ymdhi');

$sql = "insert into ";
$sql .= "i love you";

// echo PI;
// echo $sql;
// echo strlen('l iaoz hou ');
echo strpos('liao zhou', 'o');

$A = array('a' => 'apple', 'b' => 'banana', 'c' => 'cat', 'd' => array('x', 'y', 'z'));
// print_r($A);

echo $A['a'];


$xmlDoc = new DOMDocument();
$xmlDoc->load('links.xml');

$x = $xmlDoc->getElementsByTagName('link');
for ($i = 0; $i < ($x->length); $i++) { 
	# code...
	$y = $x->item($i)->getElementsByTagName('title');
	echo $y->item(0)->childNodes->item(0)->nodeValue;
}

echo "\n=========================\n";

$filename = 'poll_result.txt';
$content = file($filename);
$fp = fopen($filename, 'w');

$array = explode('||', $content[0]);
$yes = $array[0];
$no = $array[1];

$yes++;
$no++;

fputs($fp, "$yes||$no");
fclose($fp);

?>