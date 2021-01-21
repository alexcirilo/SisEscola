<?php

include 'db.php';

$idCurso = $_GET['id_curso'];

$query = "delete from cursos where id_curso = $idCurso";

mysqli_query($conexao,$query);


header("location:index.php?pagina=cursos");
