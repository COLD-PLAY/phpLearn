<!DOCTYPE html>
<html>
<head>
	<title>form handle</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
	# judge the right of string
	$nameErr = $emailErr = $genderErr = $websiteErr = "";
	$name = $email = $gender = $comment = $website = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = test_input($_POST["name"]);
		$email = test_input($_POST["email"]);
		$website = test_input($_POST["website"]);
		$comment = test_input($_POST["comment"]);
		$gender = test_input($_POST["gender"]);

		// if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
		// 	$nameErr = "only support character and space";
		// }
	}

	function test_input($data) {
		// $data = trim($data);
		// $data = stripslashes($data);
		// $data = htmlspecialchars($data);
		return $data;
	}
	?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		Name: <input type="text" name="name" value="<?php echo $name; ?>">
		<br>
		E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
		<br>
		Website: <input type="text" name="website" value="<?php echo $website; ?>">
		<br>
		<textarea name="comment" cols="40" rows="5"><?php echo $comment; ?></textarea>
		<br>
		<input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">female
		<input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">male
		<br>
		<input type="submit">
	</form>
	<?php
	echo $_POST['name'];
	echo "<br>";
	echo $_POST['email'];
	echo "<br>";
	echo $_POST['website'];
	echo "<br>";
	echo $_POST["comment"];
	echo "<br>";
	echo $_POST["gender"];
	echo "<br>";                                                         
	?>
</body>
</html>