<?php

    $con = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u823305503_colab', 'u823305503_colab', 'olhovivo');
    $stmt = $con->prepare("delete from usuario where id_usuario = ?");

    $selecionados = $_POST['selecionado'];
    
    $qtd = count($selecionados);

    for ($i = 0; $i < $qtd; $i++) {
        $stmt->bindParam( 1, $selecionados[$i]);
        $stmt->execute();
    }
?>