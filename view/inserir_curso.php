<h1>Inserir novo curso</h1>
<hr/><br>

<form action="processa_curso.php" method="POST" >
    <div>
    <label>Curso:</label>
    <input type="text" name="nome_curso" placeholder="Insira o nome do curso">
    </div>
    <br><br>
    <div>
    <label>Cargo Horária: </label>
    <input type="text" name="cargo_horaria" placeholder="Insira a Cargo horária">
    </div>

    <div><br><hr/>
    <input type="submit" value="salvar">
    </div>
</form>