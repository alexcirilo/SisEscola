<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir nova Matrícula</a>
<table class="table table-hover table-striped" id="matriculas">

    <hr /><br>
    <thead>
    <tr>
        <th>Aluno </th>
        <th>Curso</th>
        <th>Delete</th>
    </tr>
    </thead>

    <tbody>
    <?php
    while ($linha = mysqli_fetch_array($consulta_matriculas)) {
        echo "<tr><td >" . $linha['nome_aluno'] . "</td>";
        echo "<td>" . $linha['nome_curso'] . "<td>";
    ?>
        <td><a href="processa_delete_matricula.php?
        id_aluno_curso=
        <?php echo $linha['id_aluno_curso']; ?>">Delete</a></td></tr>
    <?php
    }
    ?>
    </tbody>
</table>