<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div>
            Login
        </div>
        <?php
            $erro=false;
            if(isset($_REQUEST['erro'])==true){
                echo "<div style='color: red;'>Login ou senha incorretos, tente novamente!</div>";
            }else
            {
                echo "";
            }
        ?>
        <form action="Controller\loginController.php" method="post">
            <input type="text" name="email"/>
            <input type="password" name="senha"/>
            <input type="submit" value="Login"/>
        </form>
        <a href="View/Cliente/cadastrocliente.php">Sem cadastro?</a>
    </body>
</html>