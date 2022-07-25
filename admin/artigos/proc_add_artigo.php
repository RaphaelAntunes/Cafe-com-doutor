<?php

session_start();
include("../../conexao.php");


$id = $_GET['id'];


$pesquisa = "SELECT * from artigos where destaque like 1";
$pesquisaresultado = mysqli_query($connect, $pesquisa);
$row_usuario = mysqli_fetch_array($pesquisaresultado);
$rowtotal = $pesquisaresultado->num_rows;

echo $rowtotal;


if($rowtotal >=5){
    $_SESSION['addartigo'] = "O artigo não pode ser adicionado. 5 artigos já estão destacados";
    echo "<script>location.href='editdestaquesart.php'</script>";
}else{
    $result_busca = "UPDATE artigos SET destaque = 1 where id = $id";
    $resultado = mysqli_query($connect, $result_busca);
    $con = $connect->query($result_busca) or die($mysqli->error);
    $_SESSION['addartigo'] = "O artigo foi destacado!";
    echo "<script>location.href='editdestaquesart.php'</script>";

}





?>