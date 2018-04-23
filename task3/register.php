<?php include('server.php');  ?>
<!DOCTYPE html>
<html>
	<head>
		<title>User registration system</title>
		<link rel="stylesheet" href="register.css">
	</head>
	<body>
		<div class="header">
		 <h2>Register</h2>
		</div>
		
		<form method="post" action="register.php">
		<!--- display validation error here  -->
		<?php include("errors.php"); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>E-mail</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>Department</label>
			<input type="text" name="department">
		</div>
		<div class="input-group">
			<label>College</label>
			<input type="text" name="college">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register">Register</button>
		</div>
		<p>Already a member? <a href="login.php">Sign in</a></p>
		</form>
	</body>
</html>