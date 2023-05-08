<?php
session_start();
include 'connection.php';

// Check if the user has submitted the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get the user input
	$email = $_POST["email"];
	$password = md5($_POST["password"]);

	// Check if the user credentials match
	$sql = "SELECT * FROM User WHERE email = '$email' AND password = '$password'";
	$result = $conn->query($sql);

	if ($result->num_rows == 1) {
		// Set a session variable to indicate the user is logged in
		$_SESSION["loggedin"] = true;

		// Redirect the user to a private page
		header("location: views.php");
		exit;
	} else {
		// Set an error message to display on the login form
		$error_message = "Invalid email or password.";
	}
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post" action="login.php">
		<label>Email:</label>
		<input type="email" name="email"><br><br>
		<label>Password:</label>
		<input type="password" name="password"><br><br>
		<input type="submit" value="Login">
	</form>

	<?php
	// Display an error message if there is one
	if (isset($error_message)) {
		echo "<p>$error_message</p>";
	}
	?>
</body>
</html>
