<a href="?pagina=inserir_curso">Inserir novo Curso</a>
<table style="border:1px solid #ccc; width:100%">
<tr>
    <td>Nome Curso</td>
    <td>Cargo Horária</td>
    <td>Deletar</td>
    <td>Editar</td>
</tr>

<?php
    while($linha = mysqli_fetch_array($consulta_cursos)){
        echo "<tr>
        <td >".$linha['nome_curso']."</td>
        <td>".$linha['cargo_horaria']."h"."<td>";
?>
        <td><a href="processa_delete_curso.php?id_curso=
        <?php echo $linha['id_curso'];?>">Deletar</a></td>

        <td><a href="?pagina=inserir_curso&editar=
        <?php echo $linha['id_curso'];?>">Editar</a></td>
        
        </tr>
<?php
    }
?>
</table>