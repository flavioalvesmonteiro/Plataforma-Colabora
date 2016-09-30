<!DOCTYPE>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <link href="novoEstilo.css" rel="stylesheet">
        <title>Colabora conhecimento acessível</title>
    </head>
    <body class="corpo">
        <!--Cabeçalho da página, 2 menus dropdown: para mostrar as opções do colabora, e para fazer a barra de login-->
        <div class="cabecalho">
            <!--menu-->
            <div class="menu" style="float:left;">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Sobre:</a>
                        <ul>
                            <li><a href="#">A plataforma colabora:</a></li>
                            <li><a href="#">Conheça o projeto:</a></li>
                            <li><a href="#">Condições de uso:</a></li>
                            <li><a href="#">Demonstração:</a></li>
                            <li><a href="#">Especificações técnicas:</a></li>
                            <li><a href="Cadastro.html">Cadastre-se:</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <!--Formulário de login-->
            <form method="post" action="loginusuario.php" style="float:right;">
                <div class="menu">
                    <ul>
                        <li>
                            <label for="login">Login:</label>
                            <input type="email" name="login" required/>
                        </li>
                        <li>
                            <label for="login">Senha:</label>
                            <input type="password" name="senha" required/>
                        </li>
                        <li>
                            <input type="submit" value="ok">
                        </li>
                    </ul>
                </div>
            </form>
        </div>

    </body>
</html>