<?php

include 'db.php';
$nomeCurso = $_POST['nome_curso'];
$cargoHoraria = $_POST['cargo_horaria'];


$query = "insert into cursos (nome_curso, cargo_horaria) 
values('$nomeCurso', $cargoHoraria)";

mysqli_query($conexao,$query);

header('location:index.php?pagina=cursos');
?>