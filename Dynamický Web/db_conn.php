<?php

$dbhost = "localhost"; 
$dbuser = "root";
$dbpass = "";


$db_name = "obsah";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);

if (!$conn) {
	echo "Spojenie sa nepodarilo";
}

?>