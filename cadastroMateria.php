<!doctype>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link href="estilo.css" rel="stylesheet">
        <title>Cadastro</title>
    </head>
    <body>
        
        <form method="post" action="scriptCadastrarMateria.php" id="formulario">

            <fieldset>
                <legend>cadastro de nova matéria:</legend>
                <table>
                    <tr>
                        <td>
                            <input type="text" name="novaMateria" required>
                        </td>
                        <td>
                            <?php
                                $con = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u823305503_colab', 'u823305503_colab', 'olhovivo');
                                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                                $stmt = $con->prepare("select nm_materia from materia;");
                                $stmt->execute();
                            
                                echo "<select name='ativo'>";

                                while($reg = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<option value='".$reg["nm_materia"]."'>".$reg["nm_materia"]."</option>";
                                }

                                echo "</select>"
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="ok">
                        </td>
                    </tr>
                </table>
            </fieldset>

        </form>
    </body>
</html>