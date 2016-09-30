<?php
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        //após os dados serem enviados, o script cria uma nova consulta ao banco de dados 
        $con = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u823305503_colab', 'u823305503_colab', 'olhovivo');
        $stmt = $con->prepare('select nm_email, cd_senha from usuario where nm_email = ?');
        $stmt->bindParam( 1 , $login);
        $stmt->execute();

        //caso mais, ou menos de um registro no banco de dados o script redireciona para a página de cadastro
        if(!($stmt->rowCount() != 1)){
            
            //caso tenha sido encontrado um registro no banco, o script verifica senha
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            
            if($senha == $row->cd_senha){
                
                header("Location: inicio.php");
                
            }else{
                 //caso a senha esteja incorreta, o usuário é enviado de volta à página inicial e as variáveis s
                header("Location: index.php");
            }
        
        }

?>