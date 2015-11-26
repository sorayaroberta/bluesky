<?php

$user = "root";
$pass = "";
$host = "localhost";
$db = "bluesky";
$con = mysqli_connect($host,$user,$pass,$db);
if(!$con){
	die("Erro de conexao".mysqli_error());
}

?>