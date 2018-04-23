<?php include('login1.php');  ?>
<!DOCTYPE html>
<html>
	<head>
		<title>User registration system</title>
		<link rel="stylesheet" href="register.css">
		

	</head>
	<body>
		<div class="header">
		 <h2>login</h2>
		</div>
		
		<form method="post" action="login.php">
		<!--- display validation error here  -->
		<?php include("errors.php"); ?>			
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login">Login</button>
		</div>
		<p>Not yet a member? <a href="register.php">Sign up</a></p>
		</form>
	</body>
</html>