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
            <HEAD>

            <BODY>
                <?php
                require_once('../Shared/MenuHeader.php');
                require_once('../Shared/Panel.php');
                ?>
            <center>
                <center><h3 class="panel-title">Serviços cadastrados</h3></center>
            </div>
            <?php
            $servicos = $_SESSION['servicos'];
            ?>
            <table class="table table-striped table-bordered" align="center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">VALOR</th>
                        <th scope="col">DESCRIÇÃO</th>
                        <th scope="col">TIPO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($servicos as $serv) {
                        ?>
                        <tr align="center">
                            <td scope="row"><?= $serv->id_servico; ?></td>
                            <td><?= $serv->nome; ?></td>
                            <td><?= $serv->valor; ?></td>
                            <td><?= $serv->descricao; ?></td>
                            <td><?= $serv->id_tipo; ?></td>
                            <td><a href='..\..\Controller\ServicoController.php?opcao=3&id=<?= $serv->id_servico; ?>'><input type='button' class='btn btn-secondary' value='Alterar'/></a>
                            <a href='..\..\Controller\ServicoController.php?opcao=5&id=<?= $serv->id_servico; ?>' ><input type='button' class='btn btn-danger' value='Excluir'/></a></td>
                        </tr>
                        <?php
                    }
                    ?>
            </table>
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
