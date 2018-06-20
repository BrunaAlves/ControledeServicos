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

                $servico = $_SESSION['servico'];

                //foreach ($servico as $s) {
                //	print_r($s);
                //}
                ?>
            <center><h3 class="panel-title">Alterar Serviço</h3></center>
        </div>
        <div class="panel-body">
            <form action="..\..\Controller\servicoController.php?opcao=4" method="POST">
                <div>
                    <div>
                        <div>
                            <label>ID:</label>
                            <div>
                                <input class="form-control" type="text" name="id_servico" value="<?php echo $servico->id_servico ?>" readonly>
                            </div>
                        </div>
                        <div>
                            <label>Nome do serviço:</label>
                            <div>
                                <input class="form-control" type="text" name="nome" value="<?php echo $servico->nome ?>">
                            </div>
                        </div>
                        <div>
                            <label>Valor:</label>
                            <div>
                                <input class="form-control" type="text" name="valor" value="<?php echo $servico->valor ?>">
                            </div>
                        </div>
                        <div>
                            <label>Descrição:</label>
                            <div>
                                <input class="form-control" type="text" name="descricao" value="<?php echo $servico->descricao ?>">
                            </div>
                        </div>
                        <div>
                            <label>Tipo:</label>
                            <div>
                                <input class="form-control" type="text" name="id_tipo" value="<?php echo $servico->id_tipo ?>">
                            </div>
                        </div>
                        <div>
                            <label>Datas disponíveis:</label>
                            <?php foreach ($servico->datas as $key => $value) { ?>
                                <div>
                                    <label>Id: <input type="text" name="id_disponibilidade[<?php echo $value->id_disponibilidade ?>]" value="<?php echo $value->id_disponibilidade ?>" readonly>
                                        Data: <input type="date" name="data[<?php echo $key ?>]" value="<?php echo $value->data ?>">
                                        <a href='..\..\Controller\datadisponivelController.php?opcao=1&id=<?php echo $value->id_disponibilidade?>&idserv=<?php echo $servico->id_servico ?>' ><input type="button" class="btn btn-danger" value="Excluir"/>
                                        </div></a></label>
                                <?php } ?>


                                <input type="hidden" name="opcao" value="4">
                                <div>
                                    <button type="submit" class="btn btn-primary" value="Atualizar">Atualizar</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
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
