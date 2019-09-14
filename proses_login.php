<?php  
ob_start();
session_start();

$user = $_POST['user'];
$password = $_POST['password'];

	if ($_POST['user'] == "nur" &&
		$_POST['password'] == "123"){

		$_SESSION['login']= true;
		$_SESSION['user'] = $user;

		header('Location: index.php');
		
	}else {
		$_SESSION['error'] = true;
		header('Location: login.php');
		
	}


?>

