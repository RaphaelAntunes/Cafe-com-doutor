<?php

session_start();
include("../../conexao.php");


$id = $_GET['id'];




$result_busca = "DELETE from youtube where id = $id";
$resultado = mysqli_query($connect, $result_busca);
$con = $connect->query($result_busca) or die($mysqli->error);

if($con == 1){
    echo "<script>location.href='index.php'</script>";

}else{
    echo "<script>location.href='index.php'</script>";
}

?>