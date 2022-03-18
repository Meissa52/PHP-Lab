<?php
	require_once "database.php";
	$users = $db->prepare("SELECT * FROM users");
	$users->execute();
?>