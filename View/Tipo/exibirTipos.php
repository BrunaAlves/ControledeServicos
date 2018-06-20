<?php
require_once('../../Model/DAO/autentificar.inc');

if (isset($_SESSION['usuario'])) {
    $user = $_SESSION['usuario'];
    if ($user->Tipo_user == 0) {
        ?>

        <HTML>
            <?php
            require_once('../Shared/Header.php');
            ?>
            <BODY>
                <?php
                require_once('../Shared/MenuHeader.php');
                require_once('../Shared/Panel.php');
                ?>
            <center>
                <center><h3 class="panel-title">Tipos de Serviço</h3></center>
            </div>

            <?php
            $tipos = $_SESSION['tipos'];
            ?>
            <table class="table table-striped table-bordered" align="center">
                <thead>
                    <tr>
                        <td scope="col">COD</td>
                        <td scope="col">NOME</td>
                        <td scope="col">VALOR</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($tipos as $tipo) {
                        echo"<tr align='center'>";
                        echo"<td scope='row'>" . $tipo->id_tipo . "</td>";
                        echo"<td>" . $tipo->nome . "</td>";
                        echo"<td>" . $tipo->valor . "</td>";
                        echo"<td><a href='../../Controller/tipoController.php?opcao=3&id=" . $tipo->id_tipo . "'><input type='button' class='btn btn-secondary' value='Alterar'/></a>&nbsp;";
                        echo"<a href='../../Controller/tipoController.php?opcao=4&id=" . $tipo->id_tipo . "'><input type='button' class='btn btn-danger' value='Excluir'/></a></td>";
                    }
                    ?>
                    </div>
                </tbody>
        </center>
        </BODY>
        </HTML>
        <?php
    } else {
        $erro = "Você não tem permissão de acesso para essa página!";
        header("Location:../Erro/erro.php?erro=" . $erro);
    }
}
?>