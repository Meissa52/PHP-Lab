<?php
	if(!isset($locationId))
	{
		$error_message = "Something went wrong.";
		header ("Location: error_page.php");
	}

	require_once "database.php";
	$statement = $db->prepare("SELECT * FROM locations where locationId = :locationId");
	$statement->bindParam(":locationId", $locationId);
	$statement->execute();

	$location = $statement->fetch();

?>