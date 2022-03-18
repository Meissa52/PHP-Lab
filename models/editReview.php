<?php
	$reviewId = trim(filter_input(INPUT_POST, 'reviewId', FILTER_SANITIZE_STRING));
	$review = trim(filter_input(INPUT_POST, 'review', FILTER_SANITIZE_STRING));

	if(!isset($reviewId))
	{
		$error_message = "Something went wrong.";
		header ("Location: error_page.php");
	}

	require_once "database.php";
	$reviews = $db->prepare("UPDATE reviews SET review = :review WHERE reviewId = :reviewId");
	$reviews->bindParam(":reviewId", $reviewId);
	$reviews->bindParam(":review", $review);
	$reviews->execute();

	header("Location: ../");




?>