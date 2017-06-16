<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                //abrir modal

                $('.modal').modal();
                //now you can open modal from code
                $('#modal').modal('open');
            });
        </script>

    </head>

    <body>
        <?php include '../controllers/sessao.php'; ?>
        <?php include 'menu.php'; ?>
        <?php
        require '../dao/funcionario_dao.php';
        $funcionario = new funcionario_dao();

        //filtro contra injecton
        $filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        $result_func = $funcionario->busca_funcionario_filial($filtro['idfilial']);
        ?>
        <div  class="container">
            <div class="row">
                <?php
                if ($result_func->num_rows > 0) {//verifica se possui dados
                    ?>
                    <div class="account-wall" >
                        <div class="row">
                            <strong><h5><i>Funcionario(s) da filial buscada </i></h5></strong>
                            <div class="divider col s8 m6 l6"></div>
                            <div class="col s12 m12 l12 "> 
                                <strong><span class="new badge grey" data-badge-caption="<?php echo date('d/m/y'); ?>" >Data:</span></strong>
                            </div>
                        </div>
                        <nav class="teal lighten-5">    
                            <div class="nav-wrapper">
                                <form>
                                    <div class="input-field">
                                        <input placeholder="Ex: João" id="search" type="search" required>
                                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    </div>
                                </form>
                            </div>
                        </nav>
                        <div class=" col s12 divider"></div>
                        <div class="section"></div>
                        <!-- LISTAR FUNCIONARIOS NÃO AVALIADOS--> 
                        <div class="row"><h5 class="chip yellow  white-text col s12"><i>Não avaliados</i></h5></div>
                        
                        <ul class="collapsible popout grey lighten-2" data-collapsible="accordion">
                            <?php while ($row = mysqli_fetch_assoc($result_func)) { ?>
                                <li>
                                    <div class="collapsible-header  yellow lighten-2">
                                        <i class="material-icons">person</i><?php
                                        echo $row['nome'], ' ', $row['sobrenome'];
                                        ?></div>
                                    <div class="collapsible-body">
                                        <p> Fone: <?php echo $row['fone']; ?><br>
                                            Função: <?php echo $row['funcao']; ?>

                                            <a href="avaliacao.php?buscafuncionario=<?php echo $row['id']; ?>"><span class="new badge red" data-badge-caption="" >Avaliar</span></a>
                                        </p>
                                    </div>
                                </li>
                            <?php } ?><!--FIM DO LAÇO-->
                        </ul>
                        <div class="row"><h5 class="chip green white-text col s12"><i>Já avaliados</i></h5></div>
                        <!-- LISTAR FUNCIONARIOS JÁ AVALIADOS--> 
                        <ul class="collapsible popout grey lighten-2" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header green lighten-2">
                                    <i class="material-icons">person</i>Funcionario 1</div>
                                <div class="collapsible-body">
                                    <p>Sobrenome: sobrenome <br>
                                        Fone: 9999-9999<br>
                                        Função: funcao<br>
                                        <span class="new badge grey" data-badge-caption="10/10/2017" >Data:</span>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header teal accent-3"><i class="material-icons">person</i>Funcionario 2</div>
                                <div class="collapsible-body">
                                    <p>Sobrenome: sobrenome <br>
                                        Fone: 9999-9999<br>
                                        Função: funcao<br>
                                        <span class="new badge grey" data-badge-caption="10/10/2017" >Data:</span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php include 'footer.php'; ?>


                <!--NAO TA FUNCIONANDO-->

                <?php
            } else {

                $_SESSION['cadastro'] = './new_funcio.php';
                $_SESSION['home'] = './home.php';
                $_SESSION['mensagem'] = 'Você não possui Funcionarios vinculados a esta Filial';
                $_SESSION['numero_modal'] = 5;
                include './modal.php';
            }
            ?>
        </div>
        <script type="text/javascript" src="../js/meu_estilo.js"></script> 




    </body>
</html>
