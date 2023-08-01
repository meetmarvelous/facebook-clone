<?php 

$host = "localhost";
$username = "id21089098_fbtome" ;
$password = "Mahvellous1698.";
$db = "id21089098_fbtome";

$con = mysqli_connect($host, $username, $password, $db);
if (!$con) {
	echo "there is a problem with the sql connection";
}

?>