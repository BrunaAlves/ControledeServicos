<?php
require_once('../../Model/DAO/autentificar.inc');

if (isset($_SESSION['usuario'])) {
    $user = $_SESSION['usuario'];
    if ($user->Tipo_user == 0) {
        ?>

        <html>
            <?php
            require_once('../Shared/Header.php');
            ?>
            <body>
                <?php
                require_once('../Shared/MenuHeader.php');
                require_once('../Shared/Panel.php');
                ?>
            <center>
                <center><h3 class="panel-title">Cadastrar Tipos de Serviço</h3></center>
            </div>
            <div class="panel-body">
                <form action="../../Controller/tipoController.php" method="post">
                    <input type="hidden" name="opcao" value="1">
                    <div>
                        <label>Nome</label>
                        <input class="form-control" type="text" size="20" name="nome">
                    </div>
                    <div>
                        <label>Valor</label>
                        <input class="form-control" type="text" size="20" name="valor">
                    </div>
                    <input type="submit" value="Cadastrar">
                </form>
        </center>
        </body>
        </html>
        <?php
    } else {
        $erro = "Você não tem permissão de acesso para essa página!";
        header("Location:../Erro/erro.php?erro=" . $erro);
    }
}
?>
