<!doctype>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>
    <body>
        <form method="post" action="cadastro" id="formulario">
        <!--Cadastro de questão-->    
            <fieldset><legend>Questão:</legend>
                <table>
                    <!--questao-->
                    <tr>
                        <td>
                            <label for="titulo">Título:</label>
                        </td>
                        <td>
                            <input type="text" name="titulo" size="60" required>
                        </td>
                    </tr>

                    <!--Cabecalho da questao-->
                    <tr>
                        <td>
                            <label for="cabecalho">Cabeçalho</label>
                        </td>
                        <td>
                            <textarea rows="10" cols="60"></textarea>
                        </td>
                    </tr>

                    <!--mídia questão-->
                    <tr>
                        <td>
                            <label for="midia">Midia</label>
                        </td>
                        <td>
                            <input type="file" name="midia">
                        </td>
                    </tr>
                    <!--tipo de mídia da questão-->
                    <tr>
                        <td>
                            <label for="tipomidia">Tipo de mídia:</label>
                        </td>
                        <td>
                            <select name="tipomidia" required>
                                <option value="video">Vídeo</option>
                                <option value="imagem">Imagem</option>
                                <option value="audio">Aúdio</option>
                            </select>
                        </td>
                    </tr>

                    <!--Tipo de questão-->
                    <tr>
                        <td>
                            <label for="tipoquestao">Tipo de questão:</label>
                        </td>
                        <td>
                            <select name="tipoquestao" required>
                                <option value="Optativa">Optativa</option>
                                <option value="dissertativa">Dissertativa</option>
                            </select>
                        </td>
                    </tr>

                    <!--Nível da questão-->
                    <tr>
                        <td>
                            <label for="nivel">nivel</label>
                        </td>
                        <td>
                            <select name="nivel" required>
                                <option value="fundamental1">Fundamental 1</option>
                                <option value="fundamental2">Fundamental 2</option>
                                <option value="medio">Médio</option>
                            </select>
                        </td>
                    </tr>

                    <!--Matéria da questão-->
                    <tr>
                        <td>
                            <label for="materia">Matéria</label>
                        </td>
                        <td>
                            <select name="materia" required>
                                <option value="matematica">Matemática</option>
                                <option value="fisica">Física</option>
                                <option value="quimica">Química</option>
                                <option value="portugues">Português</option>
                                <option value="filosofia">Filosofia</option>
                                <option value="sociologia">Sociologia</option>
                                <option value="artes">Artes</option>
                                <option value="ingles">Inglês</option>
                                <option value="espanhol">Espanhol</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>

        <!--Alternativas-->
            <fieldset> <legend>Questões:</legend>
                <table>
                    <!--Alternativa 1-->
                    <tr>
                        <td>
                            <textarea name="TextAlternativa1" rows="4" cols="50"></textarea>
                        </td>
                        <td>
                            <input type="file" name="FileAlternativa1">
                        </td>
                    </tr>

                    <!--Alternativa 2-->
                    <tr>
                        <td>
                            <textarea name="TextAlternativa2" rows="4" cols="50"></textarea>
                        </td>
                        <td>
                            <input type="file" name="FileAlternativa2">
                        </td>
                    </tr>
                    
                    <!--Alternativa 3-->
                    <tr>
                        <td>
                            <textarea name="TextAlternativa3" rows="4" cols="50"></textarea>
                        </td>
                        <td>
                            <input type="file" name="FileAlternativa3">
                        </td>
                    </tr>
                    
                    <!--Alternativa 4-->
                    <tr>
                        <td>
                            <textarea name="TextAlternativa4" rows="4" cols="50"></textarea>
                        </td>
                        <td>
                            <input type="file" name="FileAlternativa4">
                        </td>
                    </tr>
                    
                    <!--Alternativa 5-->
                    <tr>
                        <td>
                            <textarea name="TextAlternativa5" rows="4" cols="50"></textarea>
                        </td>
                        <td>
                            <input type="file" name="FIleAlternativa5">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="alterCorreta" value="1">Alter. 1
                            <input type="radio" name="alterCorreta" value="2">Alter. 2
                            <input type="radio" name="alterCorreta" value="3">Alter. 3
                            <input type="radio" name="alterCorreta" value="4">Alter. 4
                            <input type="radio" name="alterCorreta" value="5">Alter. 5
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