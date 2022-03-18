<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Vacation Destinations</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/styles.css"  media="screen,projection"/>
	
</head>
<body>
<nav role="navigation">
	<div class="nav-wrapper black">
	  <a href="index.php" class="brand-logo">&nbsp;&nbsp;Vacation Destinations</a>

	  <ul id="nav-mobile" class="right">
	  	<li><?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
   					echo("<a href='models/logout.php'>Logout</a></li>");
					}
				else{
					echo("<a href='loginForm.php'>Login/Register</a></li>");
				}
			?>
	  </ul>

</nav>