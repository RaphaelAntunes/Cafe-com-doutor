<?php

session_start();
include("../../conexao.php");


$id = $_GET['id'];




$result_busca = "UPDATE youtube SET destaque = 0 where id = $id";
$resultado = mysqli_query($connect, $result_busca);
$con = $connect->query($result_busca) or die($mysqli->error);

if($con == 1){
    $_SESSION['statusupdate'] = "O video foi removido com sucesso";
    echo "<script>location.href='editdestaquesvid.php'</script>";

}else{
    $_SESSION['statusupdate'] = "O video não pode ser removido";
    echo "<script>location.href='editdestaquesvid.php'</script>";
}

?>