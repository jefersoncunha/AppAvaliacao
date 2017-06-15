<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>

        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 

        <script>
            $(document).ready(function () {
                $('select').material_select();
            });
        </script>
    </head>

    <body>
        <?php include '../controllers/sessao.php'; ?>
        <?php include 'menu.php'; ?>
        <?php
        require '../dao/funcionario_dao.php';
        require '../controllers/seguranca.php';
        require '../dao/filial_dao.php';

        //filtro contra INJECTION
        $filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        $sg = new seguranca();
        $f = new funcionario_dao();
        $filial = new filial_dao();

        $id_func = ($sg->anti_sql_injection($filtro['id_funcionario']));
        $id_filial = ($sg->anti_sql_injection($filtro['id_filial']));

        $id_aval = $_SESSION['id_bd'];
        $reslut_busca = $f->busca_funcionario_id($id_func);
        ?>
        <div  class="container">
            <div class="row">
                <div class="account-wall" >
                    <div class="row">
                        <strong><h5><i>Editar Funcionário</i></h5></strong>
                        <div class="divider col s8 m6 l6"></div>
                    </div>                    
                    <br>
                    <form  id="myform" method="post" action="../controllers/funcionario_controll.php">
                        <?php while ($linha = mysqli_fetch_assoc($reslut_busca)) {?>
                            <input type="hidden" name="id_funcio" value="<?php echo $linha['id']; ?>"/>                 
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type="text" name="nome" id="nome" value="<?php echo $linha['nome']; ?>"required autofocus/>
                                    <label for="nome">Nome</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type="text" name="sobrenome" id="sobrenome" value="<?php echo $linha['sobrenome']; ?>"required autofocus/>
                                    <label for="sobrenome">Sobrenome</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type="email" name="email" id="email" value="<?php echo $linha['email']; ?>"required autofocus />
                                    <label for="email">E-mail</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type="text" name="fone" id="fone" value="<?php echo $linha['fone']; ?>" required autofocus/>
                                    <label for="fone">Telefone</label>
                                </div>
                            </div>
                            <!--<div class='row'>
                                <div class='input-field col s12 m2 l2'>
                                    <label>Sexo</label>
                                </div>
                                <div class="section"></div>

                                <div class='input-field col s12 m4 l4'>
                                    <input class='validate' type="radio" name="sexo" 
                                           id="sexo" value="feminino" 
                            <?php
                            //if (isset($linha['sexo']) && 
                            //$linha['sexo']=="feminino") echo "checked" 
                            ?>/>
                                    <label for="feminino">Feminino</label>
                                </div>

                                <div class='input-field col s12 m4 l4'>
                                    <input class='validate' type="radio" name="sexo" 
                                           id="sexo" value="masculino" 
                            <?php
                            //if (isset($linha['sexo']) && 
                            //$linha['sexo']=="masculino") echo "checked" 
                            ?>/>
                                    <label for="masculino">Masculino</label>
                                </div>
                            </div>-->
                            <div class="row">
                                <div class='input-field col s12 m6 l6'>
                                    <label>Pertence à loja</label>
                                </div>
                                <div class="section"></div>
                                <div class='input-field col s12 m6 l6'>
                                    <select name="id_loja" id="id_loja" required="">
                                        <option value="" disabled selected>Selecione Loja</option>
                                        <?php
                                        $result_filiais = $filial->busca_filial_listar_todas($_SESSION['id_bd']);
                                        while ($row = mysqli_fetch_assoc($result_filiais)) {
                                            if ($row['id'] == $id_filial) { ?>
                                                <option selected value="<?php echo $row['id']; ?>" > <?php echo $row['nome']; ?></option>
                                                <?php } elseif ($row['id'] != $id_filial) { ?>
                                                <option value="<?php echo $row['id']; ?>" > <?php echo $row['nome']; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>               
                                </div>
                            </div>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type="text" name="funcao" id="funcao" value="<?php echo $linha['funcao']; ?>"required autofocus/>
                                    <label for="funcao">Função</label>
                                </div>
                            </div>
                        <?php } ?><!--FIM DO LAÇO-->                        
                        <div class="row">
                            <div class=" col s6 m6 l6 ">
                                <div>
                                    <button class="btn waves-effect waves-light red" type="submit" name="op" value="excluir">Excluir
                                        <i class="material-icons right">delete</i>
                                    </button>
                                </div>
                            </div>
                            <div class=" col s6 m6 l6 ">
                                <div class="right">
                                    <button class="btn waves-effect waves-rigth blue darken-1" type="submit" name="op" value="editar">Salvar
                                        <i class="material-icons right">done</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php include 'footer.php'; ?>
        </div>
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       
    </body>
</html>
