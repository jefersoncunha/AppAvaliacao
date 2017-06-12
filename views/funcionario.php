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

        <?php
        include '../controllers/conexao_bd.php';

        $bd = new conexao_bd();

        $bd->conectar();

        $q = intval($_GET['filial']);


        $sql = "SELECT * FROM funcionario WHERE id_filial= '" . $q . "'";
        $result = $bd->query($sql);

        //echo "<table><tr><th>Nome</th><tr><th>ID</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            $vetor = array_map('utf8_encode', $row);
            //echo "<tr>";
            // echo "<td>" . $row['nome'] . "</td>";
            //'<option value="'. $row['id'] .'">'. $row['nome'] .'</option>';
            //echo "<td>" . $row['id'] . "</td>";
            //echo "</tr>";
        }
        //echo "</table>";
        //$bd->fechar();

        
//Passando vetor em forma de json
        echo json_encode($vetor);
        ?>
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       

    </body>
</html>

