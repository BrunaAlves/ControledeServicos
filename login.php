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
            
            if(isset($_REQUEST['erro']))
            {
            $erro = $_REQUEST['erro'];
            echo "<font face='Arial' color='red'><strong>".$erro."</strong></font>";
            }
            else
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