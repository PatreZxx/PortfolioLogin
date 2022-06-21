<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - PZ</title>
	<link rel="stylesheet" href="css/style.css">
    <link href="assets/img/logicon.png" rel="icon">
</head>
<?php
session_start();
unset($_SESSION['user_name']);
?>
<body>
	<form action="login.php" method="POST">
		<fieldset>
			<legend>Log In</legend>

				<?php if(isset($_GET['chyba'])){?>
					<span class="err"><?php echo $_GET['chyba']; ?></span>	
				<?php }?>
					
				<p class="form-line">
					<label for="user-form">Name</label><span>*</span><br>
					<input type="text" name="user-form" id="user-form" placeholder="Name">
				</p>
				<p class="form-line">
					<label for="password-form">Password</label><span>*</span><br>
					<input type="password" name="password-form" id="password-form" placeholder="Password">
				</p>
				<p class="form-line">
					<input type="submit" name="button-form" value="Login">
				</p>
		</fieldset>
	</form>
</body>
</html>
