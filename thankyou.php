<!DOCTYPE html>
<html>
<head>
	<title>Thank You!</title>
</head>
<body>
	<h1>Thank You!</h1>
	<p>Received <?php echo $_POST["type"]; ?> message from <?php echo $_POST["complete_name"]; ?> (<?php echo $_POST["email"]; ?>)</p>
	<p><?php echo $_POST["message"]; ?></p>
	<p>Satisfaction Level: <?php echo $_POST["satisfaction_level"]; ?></p>
</body>
</html>
