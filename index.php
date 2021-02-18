<?php
# iniciar sessão
session_start();

#Base de dados
include 'db.php';

#Cabeçalho
include 'header.php';


#Conteúdo

if (isset($_SESSION['login'])) {
    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 'cursos';
    }
} else {
    $pagina = "home";
}


switch ($pagina) {
    case 'cursos':
        include 'view/cursos.php';
        break;
    case 'alunos':
        include 'view/alunos.php';
        break;
    case 'matriculas':
        include 'view/matriculas.php';
        break;
    case 'municipios':
        include 'view/municipio.php';
        break;
    case 'inserir_aluno':
        include 'view/inserir_aluno.php';
        break;
    case 'inserir_curso':
        include 'view/inserir_curso.php';
        break;
    case 'inserir_matricula':
        include 'view/inserir_matricula.php';
        break;
    case 'deletar_aluno':
        include 'view/deletar_aluno.php';
        break;
    default:
        include 'view/home.php';
}


#rodapé
include 'footer.php';
