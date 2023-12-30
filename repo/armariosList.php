<?php
    $conexao = NULL;
    
    function abrirConexao(){        
        $conexao = null;
        try{	        
            //Local
            $conexao = new PDO('mysql:host=localhost; dbname=RegistroArmario', 'root', '');
            $conexao->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->exec("SET NAMES 'utf8mb4'");

		}catch (PDOException $erro){
            echo $erro;
            
            die();
        }	        
        return $conexao;
    }

    function listarArmarios(){
        try{
            $sql = "SELECT * FROM Armario INNER JOIN Usuario ON Usuario.idUsuario = Armario.dono INNER JOIN Curso ON Curso.idCurso = Usuario.idCurso WHERE situacao = 2;";

            $conexao = abrirConexao();        
            $sentenca = $conexao->prepare($sql);
        
            $sentenca->execute();     
            $conexao = null;
            return $sentenca->fetchAll();
        }catch (PDOException $erro){
            echo ($erro);
        }
    } 
?>