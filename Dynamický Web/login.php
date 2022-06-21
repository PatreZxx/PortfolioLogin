<?php
session_start();
include "db_conn.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_POST['user-form']) && isset($_POST['password-form'])) {
		
		function check($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$fuser = check($_POST['user-form']);
		$fpass = check($_POST['password-form']);


		if (empty($fuser)) {
			header("Location: index.php?chyba=Name is empty!");
			exit();
		}else if(empty($fpass)){
			header("Location: index.php?chyba=Password is empty!");
			exit();
		}else{
			//echo "data su ok";

			$sql = "SELECT * FROM udaje WHERE user_name = '$fuser' AND password = '$fpass'";

			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) === 1) {
				$row = mysqli_fetch_assoc($result);

				if ($row['user_name'] === $fuser && $row['password'] === $fpass) {
					
					$_SESSION['user_name'] = $row['user_name'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['id'] = $row['id'];

					header("Location: index2.php");
					exit();
				}

			}else{
				header("Location: index.php?chyba=Invalid data!");
				exit();
			}


		}
		



	}
}else{
	header("Location: index.php");
	exit();
}



?>