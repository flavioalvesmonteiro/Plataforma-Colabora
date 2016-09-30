<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Instituições</title>
    </head>
<body>
    <h1>Cadastro de instituições</h1>
    <form>
        <fieldset>
            <legend>Dados cadastrais:</legend>
            <table>
                <tr>
                    <td><label for="nome">Nome:</label></td> <td><label for="endereco">Endereço: </label></td>
                </tr>
                <tr>
                    <td><input type="text" name="nome" required></td><?php $nome = $_POST['nome'] ?>
                    
                    <td><input type="text" name="endereco" required></td><?php $endereco = $_POST['endereco'] ?>
                </tr>
                <tr>
                    <td><label for="nomeContato">Nome contato:</label></td> <td><label for="telefoneContato">Telefone para contato:</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="nomeContato" required></td><?php $nomeContato = $_POST['nomeContato'] ?>
                    
                    <td><input type="number" name="telefoneContato" required></td><?php $telefoneContato = $_POST['telefoneContato'] ?>
                </tr>
                <tr>
                    <td><label for="cep">CEP: </label></td> <td><label for="estado">Estado: </label></td>
                </tr>
                <tr>
                    <td><input type="number" name="cep" required></td><?php $cep = $_POST['cep'] ?>
                    <td>
                        <select name="estado"><?php $estado = $_POST['estado'] ?>
                            <option selected="" value="">Selecione o Estado (UF)</option>
                            <option value="Acre">Acre</option>
                            <option value="Alagoas">Alagoas</option>
                            <option value="Amapá">Amapá</option>
                            <option value="Amazonas">Amazonas</option>
                            <option value="Bahia">Bahia</option>
                            <option value="Ceará">Ceará</option>
                            <option value="Distrito Federal">Distrito Federal</option>
                            <option value="Espírito Santo">Espírito Santo</option>
                            <option value="Goiás">Goiás</option>
                            <option value="Maranhão">Maranhão</option>
                            <option value="Mato Grosso">Mato Grosso</option>
                            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                            <option value="Minas Gerais">Minas Gerais</option>
                            <option value="Pará">Pará</option>
                            <option value="Paraíba">Paraíba</option>
                            <option value="Paraná">Paraná</option>
                            <option value="Pernambuco">Pernambuco</option>
                            <option value="Piauí">Piauí</option>
                            <option value="Rio de Janeiro">Rio de Janeiro</option>
                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                            <option value="Rondônia">Rondônia</option>
                            <option value="Roraima">Roraima</option>
                            <option value="Santa Catarina">Santa Catarina</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="Sergipe">Sergipe</option>
                            <option value="Tocantins">Tocantins</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="OK"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
<?php
    $con = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u823305503_colab', 'u823305503_colab', 'olhovivo');
    $stmt = $con->prepare("insert into instituicao (nm_instituicao, cd_endereco, nm_contato, cd_telefone_contato, cd_cep, cd_unidade_federal) values (?,?,?,?,?,?)");
    $stmt->bindParam(1,$nome);
    $stmt->bindParam(2,$endereco);
    $stmt->bindParam(3,$nomeContato);
    $stmt->bindParam(4,$telefoneContato);
    $stmt->bindParam(5,$cep);
    $stmt->bindParam(6,$estado);
    $stmt->execute();
?>