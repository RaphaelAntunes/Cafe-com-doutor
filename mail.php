<?php 

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$mensagem = $_POST['mensagem'];




$to = "contato@clubeperegrinos.com.br";
$subject = "Contato";
$body = "Nome: ".$nome. "\r\n".
        "Sobrenome: ".$sobrenome. "\r\n".
        "Email: ".$email. "\r\n".
        "Whatsapp: ".$whatsapp. "\r\n".
        "mensagem: ".$mensagem;

$header = "From: contato@clubeperegrinos.com.br". "\r\n";         
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

            if(mail($to,$subject,$body,$header))
              

?>