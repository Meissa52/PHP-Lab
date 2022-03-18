<?php
	$reviewId = trim(filter_input(INPUT_POST, 'reviewId', FILTER_SANITIZE_STRING));
	$locationId = trim(filter_input(INPUT_POST, 'locationId', FILTER_SANITIZE_STRING));

	if(!isset($reviewId))
	{
		$error_message = "Something went wrong.";
		header ("Location: error_page.php");
	}

	require_once "database.php";
	$reviews = $db->prepare("DELETE FROM reviews WHERE reviewId = :reviewId");
	$reviews->bindParam(":reviewId", $reviewId);
	$reviews->execute();

	header("Location: ../");
?>