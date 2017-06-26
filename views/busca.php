<?php

// Incluir aquivo de conex�o
include("../controllers/_redirectBD.php");

// Recebe o valor enviado
$valor = $_GET['valor'];

$bd = new conexao_bd();
$bd->conectar();

// Procura titulos no banco relacionados ao valor
$sql = "SELECT * FROM funcionario WHERE nome LIKE '%" . $valor . "%'";

$returno = $bd->query($sql);

    
?>
  <br>
  <strong><h6><i>Resultado da busca </i></h6></strong>
  <div class="divider col s8 m6 l6"></div>
  <br>
  <div class="collection">
<?php
// Exibe todos os valores encontrados
while ($row = mysqli_fetch_assoc($returno)) {?>
    
        <a href="avaliacao.php?buscafuncionario=<?php echo $row['id']; ?>" class='collection-item'>
            <span class='new badge'>
            </span><?php echo $row['nome']; echo " "; echo $row['sobrenome']; ?>
        </a>
    
    <?php
}
?>
  </div>
    <?php
// Acentuação
header("Content-Type: text/html; charset=utf-8", true);
?>