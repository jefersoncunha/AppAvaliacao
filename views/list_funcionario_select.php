<head>
    <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script> 
    <script type="text/javascript">

        $(document).ready(function () {
            $('select').material_select();

            //$('#loja').change(function () {
            //   $('#funcionario').load('fucionario.php?filial=' + $('#loja').val());
            //});
        });</script>
</head>
<?php
include '../controllers/conexao_bd.php';
require '../dao/funcionario_dao.php';
$f_dao = new funcionario_dao();
$resultBusca = $f_dao->busca_funcionario_filial(intval($_GET['Buscafilial']));
//if ($resultBusca->num_rows > 0) {//verifica se possui funcionarios 
?>
<select>
    <option value="" disabled selected>Selecione um funcionário para a busca</option>
    <?php
    while ($row = mysqli_fetch_assoc($resultBusca)) {
        ?>
        <option value="<?php echo $row['id']; ?>" > <?php echo $row['nome']; ?></option>
    <?php } ?>
</select>
<?php
//} else {
?>
<!--
<div class="row center">
    <div class="chip red white-text">
        Não há funcionário cadastrado para esta filial!<a href="new_funcio.php"> Cadastrar</a>
    </div>
    <!--<strong class=""><h5><i>Não há Funcionário cadastrado</i></h5></strong>
    <div class="divider col s8 m6 l6"></div>
</div> -->
<?php
//$_SESSION['cadastro'] = './new_funcio.php';
//$_SESSION['mensagem'] = 'Você não possui funcionario cadastrado nesta filial';
// $_SESSION['home'] = './home.php';
// $_SESSION['numero_modal'] = 5;
//}
?>
</div>
</div>

