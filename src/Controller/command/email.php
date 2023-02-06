<?php

/*
$para ="adilson.manuel1@hotmail.com";
$nome = $_POST['nome'];
// 3 - resgatar o assunto digitado no formulário e  grava na variavel
//$assunto
$motivo = $_POST['motivo'];
//4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagem = "<strong>Nome:  </strong>".$nome;
$mensagem .= "<br>  <strong>Mensagem: </strong>"
.$_POST['mensagem'];

//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  hotmail..com<adilson.manuel1@hotmail.com>\n";
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  <adilson.manuel1@hotmail.com>\n";
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <adilson.manuel1@hotmail.com>\n";
//caso a msg //seja respondida vai para  este email.


mail($para, $motivo, $mensagem, $headers. "From: <adilson.manuel1@hotmailcom>");  //função que faz o envio do email.
*/

$to ="adilson.manuel1@hotmail.com   ";
$subject="E-mail teste";
$mensage ="Das Teste";
$from = "From:<adilson.manuel1@hotmail.com.com>";
if(mail($to,$subject,$mensage,$from)){
    echo "E-mail Enviado";
}
else
{
    echo "Falha de envio";
}

?>