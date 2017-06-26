<?php
require '../controllers/_redirectBD.php';

//setting header to json
header('Content-Type: application/json');

//chama classe do bD
$bd = new conexao_bd();
//conecta
$bd->conectar();


//query to get data from the table
$sql = sprintf("SELECT nota, id_criterio, data, obs FROM avaliacao WHERE id_funcionario=1");

$result = $bd->query($sql);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();


//now print the data
print json_encode($data);