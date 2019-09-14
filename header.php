<?php  
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Dokumen</title>
</head>
<body>
	<header>
		<table>
			<tr>
				<td>Hallo <?php echo $_SESSION['user']; ?> !</td>
				<td rowspan="2">Submit</td>
				<td><a href="logout.php">Log Out</a></td>
			</tr>
		</table>
	<hr>
	</header>
	<nav>
		<a href="index.php"> Home</a>
		<a href="dokumenmasuk.php">Dokumen Masuk</a>
		<a href="mydokumen.php">My Dokumen</a><br>
	</nav>