<?php
	session_start();

	//include connection
	include_once'connection.php';

	//initilize variables
	$first_name = "";
	$last_name = "";
	$email_id = "";
	$password = "";
	$confirm_password = "";
	$mobile_number = "";
	$birth_date = "";
	$gender = "";
	$term = "";

	$db=mysqli_connect($servername,$username,$password,$dbname);
 	
 	// Connection check
	if($db->connect_error){
	die("connection failed" . $db);
	}
	else{
	echo ('connection sucessfully');
	}

	if(isset($_POST['submit'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email_id = $_POST['email_id'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$mobile_number = $_POST['mobile_number'];
		$birth_date = $_POST['birth_date'];
		$gender = $_POST['gender'];
		$term = $_POST['term'];
	
		$query = "INSERT INTO quick_post(first_name, last_name, email_id, password, confirm_password, mobile_number, birth_date, gender, term) VALUES ('$first_name', '$last_name', '$email_id', '$password', '$confirm_password', '$mobile_number', '$birth_date', '$gender', '$term')";
		
		mysqli_query($db, $query);
		header('Location:signin.php');

	}

?>