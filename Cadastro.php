<!doctype>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link href="estilo.css" rel="stylesheet">
        <title>Cadastro</title>
    </head>
    <body>

    <header>
        <img src="imagens/colabora.jpg" style="float:left">
        <img src="imagens/ifsp.jpg" style="float:right">
    </header>
        
        <form method="post" action="incluirUsuario.php" id="formulario">
            <fieldset>
                <legend>CADASTRE-SE:</legend>
                
                <table>
                    <tr>
                        <td>
                            <label for="nome">Nome:</label>
                        </td>
                        <td>
                            <input type="text" name="nome"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">E-mail:</label>
                        </td>
                        <td>
                            <input type="email" name="email"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="formacao">Formação:</label>
                        </td>
                        <td>
                            <select name="formacao">
                                <option value="bacharel">Bacharel:</option>
                                <option value="mestrado">Mestrado:</option>
                                <option value="doutorado">Doutorado:</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="instituicao">Instituição:</label>
                        </td>
                        <td>
                            <select name="instituicao">
                                <?php
                                    $con = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u823305503_colab', 'u823305503_colab', 'olhovivo');
                                    $stmt = $con->query("select nm_instituicao from instituicao");
                                    $stmt->execute();
                            
                                    while($reg = $stmt->fetch(PDO::FETCH_ASSOC)){
                                        echo "<option value='".$reg['nm_instituicao']."'>".$reg['nm_instituicao']."</option>";
                                    }
                                
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="acesso">Tipo de usuário:</label>
                        </td>
                        <td>
                            <select name="acesso">
                                <option value="usuario">Usuário</option>
                                <option value="admin">Admnistrador</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="cpf">CPF:</label>
                        </td>
                        <td>
                            <input type="text" name="cpf"><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="OK" style="width:100%;height100%;">
                        </td>
                    </tr>
                </table>
                
            </fieldset>
        </form>
    </body>
</html>