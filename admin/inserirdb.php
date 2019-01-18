<?php

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$texto = $_POST['texto'];

$sql = "INSERT INTO admin VALUES 
('', '$titulo', '$subtitulo', '$texto')";

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=inserir'>Tente Novamente</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>";
}
?>