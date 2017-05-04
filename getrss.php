<?php
header("Content-Type=text/html;charset=utf-8");
$xml = 'rss_demo.xml';

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

$channel = $xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;

echo "<p><a href='$channel_link'>$channel_title</a>";
echo "<br>";
echo "$channel_desc</p>";
echo "<br>";

$x = $xmlDoc->getElementsByTagName('item');
for ($i = 0; $i < ($x->length); $i++) { 
	# code...
	$title = $x->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
	$link = $x->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
	$desc = $x->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;

	echo "<p><a href='$link'>$title</a>";
	echo "<br>";
	echo "$desc</p>";
	echo "<br>";
}
?>