<?php

include 'db.php';

$idAlunoCurso = $_GET['id_aluno_curso'];

$query = "delete from alunos_cursos where id_aluno_curso = $idAlunoCurso";

mysqli_query($conexao,$query);


header("location:index.php?pagina=matriculas");