<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
       </head>
    <body>
        <div class="section"></div>
        <div class="row">
            <strong><h5><i>Seus Funcionário(s)</i></h5></strong>
            <div class="divider col s8 m6 l6"></div>
        </div> 
        <?php
        include '../controllers/conexao_bd.php';
        $bd = new conexao_bd();
        $bd->conectar();
        $q = intval($_GET['Buscafilial']);
        $sql = "SELECT * FROM funcionario WHERE id_filial= '" . $q . "'";
        $result = $bd->query($sql);
        ?>
        <div class="section"></div>
        <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col s12 m6 l6">
                    <div class="card   blue lighten-4 lighten-3 z-depth-2">
                        <div class="card-content black-text">
                            <span class="card-title  "><strong><?php echo $row['nome'] ?></strong></span>
                            <p>
                                Sobrenome: <?php echo $row['sobrenome'] ?>
                            </p>
                            <p>
                                Função: <?php echo $row['funcao'] ?>
                            </p>
                        </div>
                        <div class="card-action ">
                            <a class="blue-text" href="edit_funcio.php?busca= <?php echo $row['id'] ?>">Editar</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            $bd->fechar();
            ?>
        </div>
        <!--Passando vetor em forma de json
        //echo json_encode($vetor);
        -->
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       
    </body>
</html>

