<?php
$servidor = "localhost";
$user = "root";
$senha = "";
$db = "aula_php";

$conexao = mysqli_connect($servidor,$user,$senha,$db);

$query = "select * from cursos";
$consulta_cursos = mysqli_query($conexao,$query);

$query = "select * from alunos";
$consulta_alunos = mysqli_query($conexao,$query);

$query = "select ac.id_aluno_curso, al.nome_aluno, c.nome_curso 
            from alunos al, cursos c, alunos_cursos ac
            where al.id_aluno = ac.id_aluno 
            and c.id_curso = ac.id_curso";
$consulta_matriculas = mysqli_query($conexao,$query);

