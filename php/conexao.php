<?php
//Dados para conexão com o banco
$server = "localhost";
$user = "root";
$password = "root";
$database = "bd_petshop";

$conexao = new mysqli($server, $user, $password, $database);

if ($conexao->connect_error) {
    die('falhou a conexão'. $conexao->connect_error);
} else {
   echo 'Conexão realizada com sucesso!';
}


?>