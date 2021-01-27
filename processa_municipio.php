
<?php

require 'db.php';

$nome_municipio = $_POST['municipio'];
$data_criacao = $_POST['data_criacao'];
$regiaoIntegracao = $_POST['regiao_integracao'];
$estado = $_POST['estado'];


$query = "insert into municipio (nome,data_criacao,regiao_integracao_id,estado) 
    values ('$nome_municipio','$data_criacao',$regiaoIntegracao,'$estado')";


mysqli_query($conexao, $query);
header("location: index.php?pagina=home");
#print($query);



?>