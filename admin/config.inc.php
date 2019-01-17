<?php

$host = "localhost";
$bd = "admin";
$user = "root";
$pass = "";

$conexao = mysqli_connect($host,$user,$pass);

$banco = mysqli_select_db($conexao, $bd);

if(!$conexao){
    echo "Conexão com banco de dados Falhou";
}



?>