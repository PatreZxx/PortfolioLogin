<?php
include "connect.php";

if (isset($_GET['page'])){
    $page = trim(htmlspecialchars(strip_tags($_GET['page'])));
}else{
    $page = 'index';
}

$sql = 'SELECT * FROM texty WHERE urlnazov = "'.$page.'"';

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

print_r($result);

$nazov = $row['nazov'];
$text = $row['text'];
$metapopis = $row['metapopis'].'| Stránka s dynamickým obsahom';
$klucoveslova = $row['klucoveslova'];
$title = $nazov.'| Stránka s dynamickým obsahom';

if ($nazov == ''){
    echo '<html><meta http-equiv = "refresh" content="0"; index.php?page="error404"></html>';
    die();
}
?>