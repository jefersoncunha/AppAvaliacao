<?php

header('Cache-Control: no-cache');
header('Content-type: application/xml; charset="utf-8"', true);

require_once('../controllers/conexao_bd.php');


$bd = new conexao_bd();
$bd->conectar();

$cod_filial = mysql_real_escape_string($_GET['search']);

$funcinarios = array();

$sql = "SELECT * FROM funcionario WHERE id_filial=\'' . $cod_filial . '\''";

$retorno = $bd->query($sql);

while ($row = mysqli_fetch_assoc($retorno)) {
    $funcinarios[] = array(
        'cod_funcionario' => $row['id'],
        'nome' => $row['nome'],
    );
}

$bd->fechar();

echo( json_encode($funcinarios) );

