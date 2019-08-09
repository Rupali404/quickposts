<?php include('sign_up.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Quick Post</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h2>Create a new account </h2>

	<form action="sign_up.php" method="post">
	<div class="container">
		<label>First Name</label>
		<input type="text" name="first_name" placeholder="Frist Name" required>

		<label>Last Name</label>
		<input type="text" name="last_name" placeholder="Last Name" required>

		
		<label>Email Id</label>
		<input type="text" name="email_id" placeholder="Email address" required>


		<label>Password</label>
		<input type="password" name="password" placeholder="Password" required>


		<label>Confirm Password</label>
		<input type="password" name="confirm_password" placeholder="Confirm password" required>


		<label>Mobile Number</label>
		<input type="number" name="mobile_number" placeholder="Mobile Number" required>


		<label>Birthdate</label>
		<input type="date" name="birth_date" required>


		<label>Gender</label>
		<input type="radio" name="gender" value="male" required>Male
		<input type="radio" name="gender" value="female" required>Female <br>

		<input type="checkbox" name="term" value="agree" required>I a agree with terms and condition.

		<button type="submit" class="btn" name="submit">Submit</button>
	</div>
	</form>
</body>
</html>