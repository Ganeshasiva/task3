<?php include('server.php'); ?>
<?php include('login1.php');
		//if user is not logged in, they can't access this page
		if(empty($_SESSION['username'])) {
		header('location: login.php');
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>User registration system</title>
		<link rel="stylesheet" href="register.css">
	</head>
	<body>
		<div class="header">
		 <h2>Home Page</h2>
		</div>
		<div class="content">
			<?php if (isset($_SESSION['success'])){ ?>
				<div class="error success">
					<h3>
					<?php	
						echo $_SESSION['success'];
						unset ($_SESSION['success']);
						?>
						</h3> 
				</div>
			<?php } ?>
		<?php if (isset($_SESSION["username"])){ ?>
			<h3>Your Information: </h3>
			<p><strong>Username:<?php echo $_SESSION['username']; ?></strong></p>
			<p><a href="login.php?logout='1'" style="color: red;">Logout</a></p>
			<p>if you want visit admin Resume or Timecountdown.</p>
			<p>Then you press the button here<button><a href="bstrapresume.html">Resume </a></button><button><a href="digitalclk.html"> Timecountdown</a></button></p>
		<?php } ?>
		
		</div>
	</body>
</html>