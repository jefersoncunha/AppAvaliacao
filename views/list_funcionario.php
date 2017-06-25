
<?php
//include '../controllers/conexao_bd.php';
require '../dao/funcionario_dao.php';
$f_dao = new funcionario_dao();
$resultBusca = $f_dao->busca_funcionario_filial(intval($_GET['Buscafilial']));
if ($resultBusca->num_rows > 0) {//verifica se possui funcionarios 
    ?>
    <div class="account-wall" >
        <div class="row">
            <strong><h5><i>Seus Funcionário(s)</i></h5></strong>
            <div class="divider col s8 m6 l6"></div>
        </div> 
        <div class="section"></div>
        <div class="row">

            <?php
            while ($row = mysqli_fetch_assoc($resultBusca)) {
                ?>
                <form action="edit_funcio.php" method="post" id="myformFunc">
                    <input type="hidden" name="id_funcionario" value="<?php echo $row['id'] ?>"/>
                    <input type="hidden" name="id_filial" value="<?php echo $row['id_filial'] ?>"/>
                    <div class="col s12 m6 l6">
                        <div class="card   blue darken-1 z-depth-5">
                            <div class="card-content white-text">
                                <span class="card-title  "><strong><?php echo $row['nome'] ?></strong></span>
                                <p>
                                    Sobrenome: <?php echo $row['sobrenome'] ?>
                                </p>
                                <p>
                                    Função: <?php echo $row['funcao'] ?>
                                </p>
                            </div>
                            <div class="card-action center blue darken-2">
                                <!--<a  href="javascript:{}" onclick="document.getElementById('myformFunc').submit(); return false;">Editar</a>
                                <a  href="edit_funcio.php?id_funcionario=<?php //echo $row['id']   ?>&&id_filial=<?php //echo $row['id_filial']   ?>">Editar</a>-->
                                <button class="btn waves-effect waves-light blue darken-3" type="submit">Editar
                                    <i class="material-icons right">mode_edit</i>
                                </button>
                            </div>
                        </div>
                    </div>              
                </form>
                <?php
            }
            ?>


            <?php
        } else {
            ?>
            <div class="row center">
                <div class="chip red white-text">
                    Não há funcionário cadastrado para esta filial!<a href="new_funcio.php"> Cadastrar</a>
                </div>
                <!--<strong class=""><h5><i>Não há Funcionário cadastrado</i></h5></strong>
                <div class="divider col s8 m6 l6"></div>-->
            </div> 
            <?php
            //$_SESSION['cadastro'] = './new_funcio.php';
            //$_SESSION['mensagem'] = 'Você não possui funcionario cadastrado nesta filial';
            // $_SESSION['home'] = './home.php';
            // $_SESSION['numero_modal'] = 5;
        }
        ?>
    </div>
</div>

