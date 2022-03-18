<?php
	$locationId = trim(filter_input(INPUT_POST, 'locationId', FILTER_SANITIZE_STRING));
	$userId = trim(filter_input(INPUT_POST, 'userId', FILTER_SANITIZE_STRING));
	$review = trim(filter_input(INPUT_POST, 'review', FILTER_SANITIZE_STRING));

	if(!isset($locationId) && !isset($userId) && !isset($review))
	{
		$error_message = "Something went wrong.";
		header ("Location: error_page.php");
	}

	require_once "database.php";
	$reviews = $db->prepare("INSERT INTO reviews (review, userId, locationId) VALUES (:review, :userId, :locationId)");
	$reviews->bindParam(":review", $review);
	$reviews->bindParam(":userId", $userId);
	$reviews->bindParam(":locationId", $locationId);
	$reviews->execute();

	header("Location: ../");
?>