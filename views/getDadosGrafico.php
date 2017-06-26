<?php

require '../controllers/_redirectBD.php';
//$id = $_POST['idFuncionario'];
$bd = new conexao_bd();
$bd->conectar();

//busca nota e data
$sql = "SELECT * FROM avaliacao WHERE id_funcionario=1 ORDER BY id";
$query = $bd->query($sql);

$sql2 = "SELECT * FROM criterio WHERE id=3";
//$sql = "SELECT * FROM criterio WHERE id_funcionario=1 ORDER BY id";
$query2 = $bd->query($sql2);
// Array
$data = array(
    'votos' => [],
    'datas' => [],
    'nome_criterio' => []);

// Associando dados
while ($row = $query->fetch_assoc()) {
    array_push($data['votos'], $row['nota']);
    array_push($data['datas'], utf8_encode($row['data']));
}
//busca criteriio
while ($row2 = $query2->fetch_assoc()) {
    array_push($data['nome_criterio'], $row2['nome']);
}
//json_encode
echo json_encode($data);
?>