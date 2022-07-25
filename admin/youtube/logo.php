<?php 

session_start();
include("../../conexao.php");

$titulo = $_POST['titulo'];
$legenda = $_POST['legenda'];
$link = $_POST['link'];
$data = $_POST['ddata'];


$ascii = implode('', array_merge(range('a', 'z'), range(0, 9)));
$ascii = str_repeat($ascii, 5);


if(isset($_POST['enviar-formulario'])):

    $formatosPermitidos = array("png", "jpg", "svg", "jpeg");
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
    
    if(in_array($extensao, $formatosPermitidos)):
    
        $pasta = "../../youtube/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome =    substr(str_shuffle($ascii), 0, 7).".$extensao";
               
       
    
    if(move_uploaded_file($temporario, $pasta.$novoNome)):
        $_SESSION['statuslogo'] = "O video foi inserido com sucesso !";
      //  $result_usuario = "UPDATE clientes SET ext = '$extensao' WHERE empresa='$table'";
        $result_usuario = "INSERT INTO youtube (tumb, titulo, legenda, link, ddata) values ('$novoNome', '$titulo', '$legenda' , '$link', '$data')";
        $resultado_usuario = mysqli_query($connect, $result_usuario);
       echo "<script>location.href='criar.php'</script>";
    
    else:
        $_SESSION['statuslogo'] = "Não foi possivel atualizar a logo";
        echo "<script>location.href='criar.php'</script>";
    endif;   
    else:
        $_SESSION['statuslogo'] = "Formato Invalido <br>(Validos: PNG, JPG, SVG, JPEG)";
      echo "<script>location.href='criar.php'</script>";
    endif;
    
    
    endif;






?>