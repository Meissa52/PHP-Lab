<?php
session_start(); 

$loginName = trim(filter_input(INPUT_POST, 'loginName', FILTER_SANITIZE_STRING));
$Password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));



if (empty($loginName) || empty($Password)) {
	$error = "Invalid myprojects Entry. Please check all field and try again";
	//include ('../views/error.php');
    echo("ERROR");
}
else {

	require "database.php";
	
	$statement = $db->prepare("SELECT * FROM users WHERE userName = :loginName");
	
	$statement->bindParam(':loginName',$loginName);
	$statement->execute();
    $out = $statement->fetch();
   
        if($out && password_verify($Password, $out['password'])){
            $_SESSION["user"] = $loginName;
            if($out['userRole'] == 1){
                $_SESSION['userRole'] = 'Admin';
                $_SESSION['userId'] = $out['userId'];
            }
            else{
                $_SESSION['userRole'] = 'User';
                $_SESSION['userId'] = $out['userId'];
            }
            header('Location: ../index.php');
        }
        else{
            $error = "Incorrect Email or Password!";
            header('Location:../loginForm.php');
        }
}
?>