<?php
	if(!isset($locationId))
	{
		$error_message = "Something went wrong.";
		header ("Location: error_page.php");
	}

	require_once "database.php";
	$reviews = $db->prepare("SELECT * FROM reviews WHERE locationId = :locationId");
	$reviews->bindParam(":locationId", $locationId);
	$reviews->execute();
?>