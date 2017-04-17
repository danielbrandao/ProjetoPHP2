<script language='javascript'>

function confirmaExclusao(aURL) {

if(confirm('Você tem certeza que deseja excluir?')) {

location.href = aURL;

}

}

</script>
<?php

$busca = "Select * from admin order by id";

$todos = mysqli_query($conexao, $busca);

?>
<table>
    <tr>
        <td style="width: 25px;">Id</td>
        <td style="width: 205px;">Titulo</td>
        <td style="width: 105px;">Alterar</td>
        <td style="width: 105px;">Excluir</td>
    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['titulo'];?></td>
        <td><a href="?pg=admin/alterar&id=<?=$dados['id']; ?>">!!</a></td>
        <td><a href="javascript:confirmaExclusao('?pg=admin/excluirdb&id=<?=$dados['id']; ?>')" class="ask">
XX</a></td>
    </tr>
    
    <?php } ?>


</table>
