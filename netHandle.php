<?php
// setcookie('user', 'Mixi Shizi', time()+3600);	
setcookie('user', 'Mixi Shizi', time()+3600);	

session_start();
// store session data
// $_SESSION['views'] = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<title>net handle</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	// print a cookie
	// echo $_COOKIE['user'];

	// a way to view all cookies
	// print_r($_COOKIE);

	if (isset($_COOKIE['user']))
		echo 'welcome '.$_COOKIE['user'].'!<br>';
	else
		echo 'welcome guest!<br>';

	// session_destroy();

	// set the expiration date to one hour ago
	// setcookie('user', '', time()-3600);

	if (isset($_SESSION['views']))
		// retrieve session data
		$_SESSION['views'] += 1;
	else
		$_SESSION['views'] = 1;
	echo 'views = '.$_SESSION['views'].'<br>';
	?>
	<?php
	// send mail
	// $to = 'mi_xi_shi_zi@163.com';
	// $subject = 'helo mi_xi_shi_zi';
	// $message = 'helo, this is a simple email message.';
	// $from = '1193334525@qq.com';
	// $headers = 'from: $from';
	// mail($to, $subject, $message, $headers);
	// echo 'mail sent.';

	if (!isset($_REQUEST['email'])) {
		// send email
		$email = $_REQUEST['email'];
		$subject = $_REQUEST['subject'];
		$message = $_REQUEST['message'];
		mail('mi_xi_shi_zi@163.com', 'subject: $subject', $message, 'from: $email');
		echo 'thank you for using our mail form<br>';
	}
	else {
		echo '<form method="post" action="netHandle.php">
		Email: <input name="email" type="text"><br>
		Subject: <input name="subject" type="text"><br>
		Message:<br>
		<textarea name="message" rows="15" cols="40"></textarea><br>
		<input type="submit">
		</form>';
	}
	?>
</body>
</html>