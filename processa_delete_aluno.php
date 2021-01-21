<?php

include 'db.php';

$idAluno = $_GET['id_aluno'];

$query = "delete from alunos where id_aluno = $idAluno";

mysqli_query($conexao,$query);

header("location:index.php?pagina=alunos");