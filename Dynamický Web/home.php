<?php
session_start();
if(empty($_SESSION['user_name'])){
    header('Location: index.php');
}
?>
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<h2 class="title-home">
				<?php echo "Vitaj doma ".$_SESSION['name'];?>
			</h2>
			<a href="logout.php">Logout</a>
		</div>
	</body>
	</html>