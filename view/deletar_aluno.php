<h1>Remover Aluno</h1>

<form method="POST" action="processa_delete_aluno.php">
    <select name="escolha_aluno">
       
<?php
    while($linha = mysqli_fetch_array($consulta_alunos)){
        echo "<option value=".$linha['id_aluno'].">
            ".$linha['nome_aluno']."</option>";
    }
?>
</select>
<br><hr/>
<div>
<input type="submit" value="remover">
</div>
</form>