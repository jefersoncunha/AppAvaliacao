<?php

require ('../controllers/_redirectBD.php');

$id_municipio = $_POST['id_filial'];
$bd = new conexao_bd();
$bd->conectar();

$sql = "SELECT id,nome,sobrenome FROM funcionario WHERE id_filial = '$id_municipio' ORDER BY nome";

//$resultado=$mysqli->query($query);
$resultado = $bd->query($sql);

while ($row = mysqli_fetch_assoc($resultado)) {
    echo "<option value='" . $row['id'] . "'>" . $row['nome']." ".$row['sobrenome']. "</option>";
}
//echo $html;
$bd->fechar();
