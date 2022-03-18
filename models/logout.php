<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['userRole']);
unset($_SESSION['userId']);
$_SESSION['message'] = "You are now logged out.";
header('Location:../index.php');
?>