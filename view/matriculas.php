<a href="?pagina=inserir_matricula">Inserir  nova Matrícula</a>
<table class="container" style="border:1px solid #ccc; width:100%">
<tr>
    <td>Aluno </td>
    <td>Curso</td>
    <td>Delete</td>
</tr>

<?php
    while($linha = mysqli_fetch_array($consulta_matriculas)){
        echo "<tr>
        <td >".$linha['nome_aluno']."</td>
        <td>".$linha['nome_curso']."<td>";
?>
        <td><a href="processa_delete_matricula.php?
        id_aluno_curso=
        <?php echo $linha['id_aluno_curso'];?>">Delete</a></td>

        </tr>
<?php
    }
?>
</table>