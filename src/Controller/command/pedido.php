<?php
include 'conexao.php';
$nome=$_POST['nome'];
$email=$_POST['email'];
$motivo=$_POST['motivo'];
$mensagem=$_POST['mensagem'];
$sql = "INSERT INTO projetos (nome,email,assunto,mensagem) VALUES ('".$nome."', '".$email."','".$motivo."','".$mensagem."')";

if(!$con)
{
    die("Connection Failed".mysqli_connect_error());
}

mysqli_query($con, $sql);

/* Possibilidade aceita pelo servidor, devo estudar.

if (mysqli_query($con, $sql)) { //this is line 30
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
*/

?>