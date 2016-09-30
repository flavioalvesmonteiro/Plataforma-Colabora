<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $formacao = $_POST['formacao'];
    $instituicao = $_POST['instituicao'];
    $acesso = $_POST['acesso'];
    $cpf = $_POST['cpf'];
    $formacao = $_POST['formacao'];

    
    $con = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u823305503_colab', 'u823305503_colab', 'olhovivo');
    $stmt = $con->prepare("insert into usuario (nm_usuario, nm_email, id_formacao, cd_perfil, instituicao_id_instituicao) values (?,?,?,?,?)");
    $stmt->bindParam(1,$nome);
    $stmt->bindParam(2,$email);
    $stmt->bindParam(3,$formacao);
    $stmt->bindParam(4,$acesso);
    $stmt->bindParam(5,$instituicao);
    $stmt->execute();

    
?>