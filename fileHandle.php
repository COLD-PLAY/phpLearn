<!DOCTYPE html>
<html>
<head>
	<title>fileHnadle</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="fileHandle.php" method="post" enctype="multipart/form-data">
		<label for="file">Filename:</label>
		<input type="file" name="file" id="file">
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php

	if ((($_FILES['file']['type'] == 'image/gif') || ($_FILES['file']['type'] == 'image/jpeg') || ($_FILES['file']['type'] == 'image/pjpeg')) && ($_FILES['file']['size'] < 2000000)) {
		if ($_FILES['file']['error'] > 0) {
			echo 'Error: '.$_FILES['file']['error'].'<br>';
		}
		else {
			echo 'Upload: '.$_FILES['file']['name'].'<br>';
			echo 'Type: '.$_FILES['file']['type'].'<br>';
			echo 'Size: '.($_FILES['file']['size']/1024).'Kb<br>';
			echo 'Sotred in: '.$_FILES['file']['tmp_name'].'<br>';

			if (file_exists('upload/'.$_FILES['file']['name'])) {
				echo $_FILES['file']['name'].'already exists';
			}
			else {
				move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$_FILES['file']['name']);
				echo 'Stored in: '.'upload/'.$_FILES['file']['name'];
			}
		}
	}
	else {
		echo 'Invaild file';
	}
	?>
	<?php
	echo "<p>Copyright © 1998-".date("Y")." liaozhou</p>";
	echo "<br>";

	//////////////////////// readfile function is easy
	// echo readfile("webdictionary.txt");	
	// $myfile = fopen("webdictionary.txt", "r");
	// echo fread($myfile, filesize("webdictionary.txt"));
	// fclose("webdictionary.txt");

	//////////////////////// write the file by fopen('w')
	// $myfile = fopen("webdictionary.txt", "w");
	// fwrite($myfile, "liaozhou");
	// fclose($myfile);

	//////////////////////// read file by line
	// $myfile = fopen("webdictionary.txt", "r");
	// echo fgets($myfile);
	// fclose($myfile);

	//////////////////////// read file by line or char till the eof(end-of-file)
	// $myfile = fopen("webdictionary.txt", "r");
	// while (!feof($myfile)) {
	// 	// echo fgets($myfile)."<br>";
	// 	echo fgetc($myfile);
	// }
	// fclose($myfile);

	/////////////////////// write the info into unexisted file and it'll be created
	// $myfile = fopen("../createfile.txt", "w");
	// $info = array("name" => "mixishizi", "gender" => "male", "phonenum" => "18280278028");

	// $str = 'hello file handle';
	// var_dump(fwrite($myfile, str));

	// foreach ($info as $key => $value) {
	// 	# code...
	// 	fwrite($myfile, $key." => ".$value);
	// }
	// fclose($myfile);
	?>
</body>
</html>