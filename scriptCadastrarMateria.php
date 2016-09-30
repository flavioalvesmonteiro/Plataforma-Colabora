<?php
    //colhendo as variaveis

    $novaMateria = $_POST["novaMateria"];
    $ativo = $_POST["ativo"];

        $con = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u823305503_colab', 'u823305503_colab', 'olhovivo');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $cd_materiaASC = $con->query("delete from materia where id_materia >= 10;");
    $cd_materiaASC->execute();

    /*try{

        //criando conexão
        $con = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u823305503_colab', 'u823305503_colab', 'olhovivo');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //recupera o id da matéria ascendente
        $cd_materiaASC = $con->query("select id_materia as idmateria from materia where nm_materia = '".$ativo."';");
        $cd_materiaASC->execute();
        $cd_materiaASC = $cd_materiaASC->fetch(PDO::FETCH_ASSOC);
        $cd_materiaASC = $cd_materiaASC['idmateria'];

        //retorna quantidade de materias do banco para fazer a chave estrangeira
        $nova_chave = $con->query("select count(id_materia) as qt from materia");
        $nova_chave->execute();
        $nova_chave = $nova_chave->fetch(PDO::FETCH_ASSOC);
        $nova_chave = $nova_chave['qt'];
        $nova_chave++;

        $subMateria = $con->query("insert into materia(id_materia, nm_materia,cd_materia_ascendente) values ('".$nova_chave."','"  .$novaMateria."','".$cd_materiaASC."');");

        $subMateria->execute();
    }
    catch(Exception $e){
        
    }*/
?>