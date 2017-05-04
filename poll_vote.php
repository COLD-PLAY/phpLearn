<?php
$vote = htmlspecialchars($_REQUEST['vote']);

$filename = 'poll_result.txt';
$content = file($filename);

$array = explode("||", $content[0])
$yes = $array[1];
$no = $array[0];

if ($vote == 1) {
	$yes++;
}

if ($vote == 0) {
	$no++;
}

$insertvote = "$yes||$no";
$fp = fopen($filename, 'w');
fputs($fp, $insertvote);
fclose($fp);

?>

<h2>result:</h2>
<table>
	<tr>
		<td>yes:</td>
		<td>
			<span style="display: inline-block; background-color: green; width: <?php echo 100*round($yes/($no + $yes), 2); ?>; height: 20px;"></span>
			<?php echo 100*round($yes/($no + $yes), 2); ?>%
		</td>
	</tr>
	<tr>
		<td>no:</td>
		<td>
			<span style="display: inline-block; background-color: green; width: <?php echo 100*round($no/($no + $yes), 2); ?>; height: 20px;"></span>
			<?php echo 100*round($no/($no + $yes), 2); ?>%
		</td>
	</tr>
</table>