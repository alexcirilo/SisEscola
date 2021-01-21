<h1>Inserir nova Matrícula</h1>
<p>Selecione o Aluno: </p>

<form method="POST" action="processa_matricula.php">

    <select name="escolha_aluno">
    <option>Selecione</option>
        <?php
        while($linha = mysqli_fetch_array($consulta_alunos)){
            echo "<option value=".$linha['id_aluno'].">
            ".$linha['nome_aluno']."</option>";
        }
        ?>
    </select>
    <br><br>
<p>Selecione o curso: </p>
<select name="escolha_curso">
<option>Selecione</option>
<?php
while($linha = mysqli_fetch_array($consulta_cursos)){
    echo "<option value=".$linha['id_curso'].">".$linha['nome_curso']."</option>";

}


?>
</select>
<br><br>
<div>
<input type="submit" value="Salvar">
</div>
</form>