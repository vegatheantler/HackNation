<?php
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>

<form action="includes/login.inc.php" method="POST">
	
	<input type="text" name=" uid" placeholder="Enter Your Username"><br>
	<input type="password" name="pwd" placeholder="Enter Your Password"><br>
	<button type="submit">Log In</button>

</form>
<?php
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	}
	else {
		echo "you are not logged in!";
	}
?>
<form action="includes/logout.inc.php">
<button>LOG OUT</button>
</form>
</body>
</html>