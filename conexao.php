<?php




//$host = "localhost";
//$user = "root";
//$pass = "";
//$banco="test";



$host = "";
$user = "";
$pass = "";
$banco="";

$connect = new mysqli($host, $user, $pass, $banco);

if(!$connect){

	die("Falha na Conexão:" . mysqli_connect_error());
}

mysqli_set_charset($connect,"utf8");
	
?>
