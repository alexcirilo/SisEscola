<a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo Curso</a>
<br><hr/>
<table class="table table-hover table-striped" id="cursos">
<thead>
<tr>
    <th>Nome Curso</th>
    <th>Cargo Horária</th>
    <th>Deletar</th>
    <th>Editar</th>
</tr>
</thead>
<tbody>
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

</tbody>
</table>
