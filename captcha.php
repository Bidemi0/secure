<?php
error_reporting(0);
$email = $_POST['e'];
if (isset($_POST['submit']) && !empty($_POST['submit'])) {
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
//Below is your secret key
$secret = '6LfTPlUUAAAAANgJTPa67hlDAXu4ppK2FgSbSOO6';
//get verify response data
$captchaResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
$responseData = json_decode($captchaResponse );
if ($responseData->success) {
	if (!empty($email)) {	
	echo "<script>window.location.href='redirect.php?e=".$email."'</script>";
}elseif (empty($email)) {
	echo "<script>window.location.href='redirect.php'</script>";
}
} else {
$errMsg = 'Captcha verification failed, please try again.';
echo "<script>alert('" . $errMsg . "');</script>";
echo "<script>window.location.href='index.php';</script>";
}
} else {
$errMsg = 'Please click on the reCAPTCHA box.';
echo "<script>alert('" . $errMsg . "');</script>";
echo "<script>window.location.href='index.php';</script>";
}
}
?>
