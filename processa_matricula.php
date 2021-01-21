<?php

include 'db.php';

$idAluno = $_POST['escolha_aluno'];
$idCurso = $_POST['escolha_curso'];

$query = "insert into alunos_cursos (id_aluno,id_curso)
values ($idAluno,$idCurso)";

mysqli_query($conexao,$query);

header("location:index.php?pagina=matriculas");