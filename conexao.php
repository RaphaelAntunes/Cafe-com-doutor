<?php




//$host = "localhost";
//$user = "root";
//$pass = "";
//$banco="test";



$host = "mysql.castingemcena.com.br";
$user = "castingemcena1";
$pass = "cafecomdoutor@";
$banco="castingemcena1";

$connect = new mysqli($host, $user, $pass, $banco);

if(!$connect){

	die("Falha na Conexão:" . mysqli_connect_error());
}

mysqli_set_charset($connect,"utf8");
	
?>