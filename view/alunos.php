<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>
<table class="table">
<br><hr/>
<tr>
    <th>Nome Aluno</th>
    <th>Data de Nascimento</th>
    <th>Deletar</th>
    <th>Editar</th>
</tr>

<?php
    while($linha = mysqli_fetch_array($consulta_alunos)){
        echo "<tr>
        <td >".$linha['nome_aluno']."</td>
        <td>".$linha['data_nascimento']."<td>";
?>
        <td><a href="processa_delete_aluno.php?id_aluno=
        <?php echo $linha['id_aluno'];?>">Deletar</a></td>

        <td><a href="?pagina=inserir_aluno&editar=
        <?php echo $linha['id_aluno'];?>">Editar</a></td>
        </tr>
<?php
    }
?>
</table>