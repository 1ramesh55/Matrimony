<?php
session_start();
session_destroy();
echo "Successfully logged out";
header("Location:login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<!--<body>
<a href="index.php">Back to home</a>
</body>-->
</html>