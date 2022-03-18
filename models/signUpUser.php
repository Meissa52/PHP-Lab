<?php
	$loginName = trim(filter_input(INPUT_POST, 'loginName', FILTER_SANITIZE_STRING));
	$Password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));

	if(empty($loginName) || empty($Password))
	{
		$error_message="Invalid Input. Check all fields and try again";
		include('database_error.php');
	}
	else
	{
		$hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
		require 'database.php';

		$statement = $db->prepare("INSERT INTO users (userName, password, userRole) VALUES (:userName,:password,2)"); 

		$statement->bindParam(':userName', $loginName);
		$statement->bindParam(':password', $hashedPassword);
		$statement->execute();
		$Message = urlencode("You Successfully Sign Up Now Login. ");
	
		header('Location: ../loginForm.php?Message='.$Message);
		die;
	}
?>