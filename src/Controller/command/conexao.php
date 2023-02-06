<?php
$server="localhost";
$user="root";
$pass="";
$data="portifoleo";
$con = mysqli_connect($server,$user,$pass,$data);

if(!$con){
    die("Conexao falhou    ".mysqli_connect.error());
}
echo "Conexao com sucesso!";

?>