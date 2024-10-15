<?php
error_reporting(0);
$email = $_GET['e'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Google reCaptcha</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<div class="container">
<h2></h2>
<form action="captcha.php" method="post">
<div class="form-group">
<center>
<div class="g-recaptcha" data-sitekey="6LfTPlUUAAAAAGSUt1_LqpJXQpatx7_BzTDcU9On"></div>
<input type="hidden" name="e" value="<?php echo $email; ?>">
<input type="submit" class="btn btn-default" id="submit" name="submit" value="Continue"/>
</form>
</div>

</body>
</html>