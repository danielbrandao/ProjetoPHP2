<?php

$id =           $_POST['id'];
$titulo =       $_POST['titulo'];
$subtitulo =    $_POST['subtitulo'];
$texto =        $_POST['texto'];


$sql2 = mysqli_query($conexao, "SELECT * FROM admin WHERE id='$id'");

$sql = "UPDATE admin SET titulo='$titulo', subtitulo='$subtitulo', texto='$texto' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=admin/listar'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=admin/listar'>Voltar</a>";
}
?>