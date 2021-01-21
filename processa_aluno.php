<?php

include 'db.php';
$nomeAluno = $_POST['nome_aluno'];
$dataNascimento = $_POST['data_nascimento'];


$query = "insert into alunos (nome_aluno, data_nascimento)
values('$nomeAluno','$dataNascimento')";

mysqli_query($conexao,$query);

header("location:index.php?pagina=alunos");

