<?php

include("../controllers/_redirectBD.php");

// Recebe o valor enviado
$idFuncionario = $_POST['idFuncionario'];
//$DataInicio = $_POST['DataInicio'];
//$DataFim = $_POST['DataFim'];

$bd = new conexao_bd();
$bd->conectar();

$sql = "SELECT * FROM avaliacao WHERE id_funcionario=" . $idFuncionario . ";";
$returno = $bd->query($sql);

while ($resultado = mysqli_fetch_assoc($returno)) {
    $vetor[] = array_map('utf8_encode', $resultado);
}

//Passando vetor em forma de json
print_r($vetor);
echo json_encode($vetor);
$bd->fechar();
?>

