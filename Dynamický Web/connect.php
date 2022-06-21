<?php

DEFINE ('db_host','localhost');
DEFINE ('db_user','root');
DEFINE ('db_password','');
DEFINE ('db_name','obsah');

// prihlasenie k Mysql serveru
//ak je server nedostupny, funkcia vráti false
$con = mysqli_connect(db_host,db_user,db_password);

if(!$con){
    echo 'Server je nedostupny'.'<br>';
    echo mysqli_connect_error();
    exit();
}

//vyber databázy

$db = mysqli_select_db($con,db_name);
if(!$con){
    echo 'Databáza je nedostupná'.'<br>';
    exit();
}