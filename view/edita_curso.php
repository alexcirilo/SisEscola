<?php
include  '../db.php';
    $id_curso = $_POST['id_curso'];

    $nome_curso = $_POST['nome_curso'];
    $cargo_horaria = $_POST['cargo_horaria'];


    $query = "update cursos set nome_curso = '$nome_curso', cargo_horaria = $cargo_horaria where id_curso = $id_curso";

    mysqli_query($conexao,$query);
    header("location: ../index.php?pagina=cursos");

?>