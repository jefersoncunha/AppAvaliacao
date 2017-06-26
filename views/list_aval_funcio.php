<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script type="text/javascript" src="../js/funcs.js"></script>

    </head>
    <body>
        <?php include '../controllers/sessao.php'; ?>
        <?php include 'menu.php'; ?>
        <?php
        require '../dao/funcionario_dao.php';
        require '../dao/avaliacao_dao.php';

        $funcionario = new funcionario_dao();
        $avaliacao = new avaliacao_dao();

        //filtro contra injecton
        $filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $result_func = $funcionario->busca_funcionario_filial($filtro['idfilial']); //busco todos funcionarios

        date_default_timezone_set("America/Sao_Paulo");
        ?>
        <input type="hidden" value="<?php echo $filtro['idfilial'] ?>" name="filial" id="filial">
        <div  class="container">
            <div class="row">
                <?php
                if ($result_func->num_rows > 0) {//verifica se possui dados
                    ?>
                
                    <div class="account-wall" >
                        <div class="row">
                            <strong><h5><i>Funcionario(s) da filial </i></h5></strong>
                            <div class="divider col s8 m6 l6"></div>
                            <div class="col s12 m12 l12 "> 
                                <strong><span class="new badge grey" data-badge-caption="<?php echo date('d/m/Y'); ?>" >Data:</span></strong>
                            </div>
                        </div>
                        <nav class="teal lighten-5">    
                            <div class="nav-wrapper">
                                <form>
                                    <div class="input-field">
                                        <input placeholder="Ex: João"  type="search" required id="busca" onkeyup="buscarNoticias(this.value)">
                                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    </div>
                                </form>
                            </div>
                        </nav>
                        
                        <div class="row" id="resultado" name="resultado"></div>
                        
                        <div class=" col s12 divider"></div>
                        <div class="section"></div>
                        <!-- LISTAR FUNCIONARIOS NÃO AVALIADOS--> 
                        <!--<div class="row"><h5 class="chip yellow  white-text col s12 center"><i>Não avaliados</i></h5></div>-->
                        <form action="avaliacao.php" method="post">    
                            <ul class="collapsible popout grey lighten-2" data-collapsible="accordion">
                                <?php
                                while ($row = mysqli_fetch_assoc($result_func)) {

                                    $dataAval = $avaliacao->busca_data_avalicao($row['id']);
                                    //while ($l = mysqli_fetch_assoc($dataAval)) {
                                    //print_r($l['data']);
                                    //echo '<br>';
                                    //print_r(date('Y-m-d'));
                                   // if (date('Y-m-d') != strtotime($l['data'])) {
                                    ?>
                                    <li>
                                        <div class="collapsible-header  yellow lighten-2">
                                            <i class="material-icons">person</i><?php
                                            echo $row['nome'], ' ', $row['sobrenome'];
                                            ?></div>
                                        <div class="collapsible-body">
                                            <p> Fone: <?php echo $row['fone']; ?><br>
                                                Função: <?php echo $row['funcao']; ?>
                                            </p>
                                            <div class="row">
                                                <div class="right">
                                                    <button class="btn red" type="submit" name="buscafuncionario" value="<?php echo $row['id']; ?>">Avaliar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                    //}
                                    //}
                                }
                                ?>
                            </ul>
                        </form>
                        <!--<div class="row"><h5 class="chip green white-text col s12 center"><i>Já avaliados dia <?php echo date('d/m/Y'); ?></i></h5></div>
                        <ul class="collapsible popout grey lighten-2" data-collapsible="accordion">
                            <?php /*
                            $result_funcio = $funcionario->busca_funcionario_filial($filtro['idfilial']); //busco todos funcionarios

                            while ($rowsF = mysqli_fetch_assoc($result_funcio)) {

                                $dataVerAval = $avaliacao->busca_data_avalicao($rowsF['id']);
                                while ($ll = mysqli_fetch_assoc($dataVerAval)) {
                                    if (strtotime(date('Y-m-d')) == strtotime($ll['data'])) {
                                        ?>
                                        <li>
                                            <div class="collapsible-header green lighten-2">
                                                <i class="material-icons">person</i><?php
                                                echo $rowsF['nome'], ' ', $rowsF['sobrenome'];
                                                ?></div>
                                            <div class="collapsible-body">
                                                <p> Fone: <?php echo $rowsF['fone']; ?><br>
                                                    Função: <?php echo $rowsF['funcao']; ?>
                                                </p>
                                            </div>
                                        </li><?php
                                    }
                                }
                            } */
                            ?><!--FIM DO LAÇO-->
                        </ul>
                        <!--
                        <div class="row"><h5 class="chip green white-text col s12"><i>Já avaliados</i></h5></div>
                        <!-- LISTAR FUNCIONARIOS JÁ AVALIADOS
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
                        </ul>
                    </div>-->
                    </div>
                    <?php include 'footer.php'; ?>
                    <?php
                } else {
                    $_SESSION['cadastro'] = './new_funcio.php';
                    $_SESSION['home'] = './home.php';
                    $_SESSION['mensagem'] = 'Você não possui funcionário vinculado a esta filial';
                    $_SESSION['numero_modal'] = 5;
                    //include './modal.php';
                }
                ?>
                <?php
                include './modal.php';
                ?>
            </div>
            </div>
            <script type="text/javascript" src="../js/meu_estilo.js"></script> 
    </body>
</html>
