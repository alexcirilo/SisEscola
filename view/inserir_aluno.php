<h1>Inserir novo Aluno</h1>
<hr/><br>
<form action="processa_aluno.php" method="POST">
    <label>Nome:</label>
    <input type="text" name="nome_aluno" placeholder="Insira o nome do Aluno">
    <br>
    <label>Data Nascimento:</label>
    <input type="text" name="data_nascimento" placeholder="dd/MM/yyyy" class="form-control" data-mask="00-00-0000">;
    <div>
    <hr/><br>
        <input type="submit" value="salvar">
    </div>
</form>