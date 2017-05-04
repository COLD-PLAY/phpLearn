<?php
header('Content-Type=text/html;charset=utf-8');

$xmlDoc = new DOMDocument();
$xmlDoc->load('links.xml');

$x = $xmlDoc->getElementsByTagName('link');

$q = $_GET['q'];

if (strlen($q) > 0) {
	$hint = '';

	for ($i = 0; $i < ($x->length); $i++) { 
		# code...
		$y=$x->item($i)->getElementsByTagName('title');
		$z=$x->item($i)->getElementsByTagName('url');
		if ($y->item(0)->nodeType==1)
		{
			// 找到匹配搜索的链接
			if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q))
			{
				if ($hint == "")
				{
					$hint = "<a href='" . 
					$z->item(0)->childNodes->item(0)->nodeValue . 
					"' target='_blank'>" . 
					$y->item(0)->childNodes->item(0)->nodeValue . "</a>";
				}
				else
				{
					$hint = $hint . "<br /><a href='" . 
					$z->item(0)->childNodes->item(0)->nodeValue . 
					"' target='_blank'>" . 
					$y->item(0)->childNodes->item(0)->nodeValue . "</a>";
				}
			}
		}
	}
}

// if ($hint == '') {
// 	$response = 'no suggestion';
// }
// else {
// 	$response = $hint;
// }
$response = ($hint == '') ? 'no suggestion' : $hint;
if ($q == 'liaozhou')
	$response = 'liaozhou i love you';

echo $response;
?>