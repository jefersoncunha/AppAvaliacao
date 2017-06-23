<?php
// Incluir aquivo de conex�o
include("../controllers/conexao_bd_cloud.php");

// Recebe o valor enviado
$valor = $_GET['valor'];

$bd = new conexao_bd();
$bd->conectar();

// Procura titulos no banco relacionados ao valor
$sql = "SELECT * FROM funcionario WHERE nome LIKE '%" . $valor . "%'";

$returno = $bd->query($sql);

// Exibe todos os valores encontrados
while ($row = mysqli_fetch_assoc($returno)) {

    echo "<ul class='collapsible popout grey lighten-2' data-collapsible='accordion'>
           <li>
                <div class='collapsible-header yellow lighten-2'>
                   <i class='material-icons'>person</i>
                   ". $row['nome'].$row['sobrenome'];
                "</div>
                 <div class='collapsible-body'>
                    <p> 
                      Fone: ".$row['fone'];
                      "<br> Função:".$row['funcao'];
                      "<a href='avaliacao.php?buscafuncionario = ".$row['id'];"'>
                      <span class='new badge red' data-badge-caption='' >Avaliar</span></a>
                    </p>
                </div>
             </li>
        </ul>";

//echo $row['nome']."<br>";
}

// Acentuação
header("Content-Type: text/html; charset=utf-8", true);
?>