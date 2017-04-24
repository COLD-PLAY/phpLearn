<!DOCTYPE html>
<html>
<head>
	<title>exception handle</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	// error handler function
	function customError($errno, $errstr) { 
		echo "<b>Error:</b> [$errno] $errstr<br>";
		echo "ending script";
		die();
	}
	// set error handler
	// set_error_handler('customError');

	// trigger error
	// echo $test;
	?>
	<?php
	// function checkNum($number) {
	// 	if ($number > 1) {
	// 		throw new Exception('value must be 1 or below');
	// 	}
	// 	return true;
	// }
	// try {
	// 	checkNum(2);
	// 	// if the exception is thrown, this text will not be shown
	// 	echo 'if you see this, the number is 1 or below';
	// }
	// catch (Exception $e) {
	// 	echo 'message: '.$e->getMessage();
	// }
	class customException extends Exception {
		public function errorMessage() {
			// error message
			$errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile().': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
			return $errorMsg;
		}
	}
	// $email = 'someone@example...com';

	// try {
	// 	// check if
	// 	if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
	// 		// throw exceptino if email is not valid
	// 		throw new customException($email);
	// 	}
	// }
	// catch (customException $e) {
	// 	// display custom message
	// 	echo $e->getMessage().'<br>';
	// }
	// catch (Exception $e) {
	// 	echo $e->getMessage().'<br>';
	// }

	$int = 123;
	if (!filter_var($int, FILTER_VALIDATE_INT)) {
		echo 'Integer is not valid'.'<br>';
	}
	else {
		echo 'Integer is valid'.'<br>';
	}
	?>

	<?php
	$var = 300;
	// array int_options
	$int_options = array('options' => array('min_range' => 0, 'max_range' => 256));
	if (!filter_var($var, FILTER_VALIDATE_INT, $int_options)) {
		echo 'Integer is not valid'.'<br>';
	}
	else {
		echo 'Integer is valid'.'<br>';
	}

	// $email = $_GET['email'];
	// echo $email.'<br>';
	if (!filter_has_var(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL)) {
		echo 'Input type does not exist'.'<br>';
	}
	else {
		if (!filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL)) {
			echo 'E-Mail is not valid'.'<br>';
		}
		else {
			echo 'E-Mail is valid'.'<br>';
		}
	}

	// use the filter_input to filter the INPUT_POST variable
	if (!filter_has_var(INPUT_POST, 'url')) {
		echo 'input type does not exist'.'<br>';
	}
	else {
		$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
	}

	// filte multiable INPUT_GET variable with filter_input_array
	$filters = array(
		'name' => array(
			'filter' => FILTER_SANITIZE_STRING
			),
		'age' => array(
			'filter' => FILTER_VALIDATE_INT,
			'options' => array(
				'min_range' => 1,
				'max_range' => 120
				)
			),
		'email' => FILTER_VALIDATE_EMAIL
		);
	$result = filter_input_array(INPUT_GET, $filters);

	if (!$result['age']) {
		echo 'age must be a number between 1 and 120'.'<br>';
	}
	elseif (!$result['email']) {
		echo 'E-Mail is not valid'.'<br>';
	}
	else {
		echo 'user input a valid'.'<br>';
	}

	// use the FILTER_CALLBACK
	function convertSpace($string) {
		return str_replace('_', ' ', $string);
	}
	$string = 'Peter_is_a_great_guy!';
	echo filter_var($string, FILTER_CALLBACK, array('options' => 'convertSpace')).'<br>';
	?>
</body>
</html>