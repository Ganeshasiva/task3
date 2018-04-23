<?php
session_start();

$username = "";
$email = "";
$department = "";
$college = "";
$errors = array();  
	// Create connection to database
		$mysqli = new mysqli("localhost", "root", "root", "user");
		/* check connection */
			if ($mysqli->connect_error) {
				printf("Connect failed: %s\n", $mysqli->connect_error);
				exit();
			}
		/*$query="SELECT * FROM users";
		if ($result = $mysqli->query($query)) {
    // fetch associative array 
    while ($row = $result->fetch_assoc()) {
      // printf ("%s (%s)\n", $row["username"], $row["email"]);
	  
    }
		} */
	//if the registration button is clicked

		if (isset($_POST['register'])){
			$username =$_POST['username'];
			$email = $_POST['email'];
			$department = $_POST['department'];
			$college = $_POST['college'];
			$password_1 = $_POST['password_1'];
			$password_2 = $_POST['password_2'];
	//ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($department)) {
			array_push($errors, "Department is required");
		}
		if (empty($college)) {
			array_push($errors, "college is required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");
		}
		if($password_1 != $password_2) {
			array_push($errors, "The two password do not match");
		}
		
	// if there are no errors, save user to database
			if (count($errors)==0) {
			$password = md5($password_1);  //encrypt password before storing databse (security)
			$insert = "INSERT INTO users (username, email, password, department, college)
								VALUES ('$username', '$email', '$password', '$department', '$college')";
								$mysqli->query($insert);	
								$_SESSION['username']= $username;
								$_SESSION['success'] = "You are now logged in";
								header('location: index.php');  //redirect to home page
		}
		}
		?>