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
                <center><h3 class="panel-title">Lista de clientes</h3></center>
            </div>
            <?php
            $clientes = $_SESSION['clientes'];
            $numpaginas = $_REQUEST['paginas'];

            function formatarData($data) {
                return date('d/m/Y', $data);
            }
            ?>
            <table class="table table-striped table-bordered" align="center">
                <div>
                    <center>
                        <ul class="pagination">
                            <?php
                            for ($i = 1; $i <= $numpaginas; $i++) {
                                ?>
                                <li><a href="../../Controller/clienteController.php?opcao=6&pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </center>
                </div>
                <thead>
                    <tr>
                        <th scope="col">COD</th>
                        <th scope="col">NOME</th>
                        <th scope="col">CPF</th>
                        <th scope="col">DATA DE NASCIMENTO</th>
                        <th scope="col">ENDERECO</th>
                        <th scope="col">TELEFONE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($clientes as $cliente) {
                        echo"<tr align='center'>";
                        echo"<th scope='row'>" . $cliente->CodCli . "</th>";
                        echo"<td>" . $cliente->Nome . "</td>";
                        echo"<td>" . $cliente->CPF . "</td>";
                        echo"<td>" . formatarData(strtotime($cliente->DtNascimento)) . "</td>";
                        echo"<td>" . $cliente->Endereco . "</td>";
                        echo"<td>" . $cliente->Telefone . "</td>";
                        echo"<td><a href='../../Controller/clienteController.php?opcao=3&id=" . $cliente->CodCli . "'><input type='button' class='btn btn-secondary' value='Alterar'/></a>&nbsp;";
                        echo"<a href='../../Controller/clienteController.php?opcao=4&id=" . $cliente->CodCli . "'><input type='button' class='btn btn-danger' value='Excluir'/></a></td>";
                    }
                    ?>
                    
                </tbody>
            </table>
        </center>
        <div>
            <center>
                <ul class="pagination">
                    <?php
                    for ($i = 1; $i <= $numpaginas; $i++) {
                        ?>
                        <li><a href="../../Controller/clienteController.php?opcao=6&pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </center>
        </div>
    </BODY>
</HTML>
<?php
} else {
    $erro = "Você não tem permissão de acesso para essa página!";
    header("Location:../Erro/erro.php?erro=" . $erro);
}
}
?>
