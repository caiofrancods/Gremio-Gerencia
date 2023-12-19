<?
include_once "banco.php";
function salvar($nome, $resp, $data, $descricao) {
    try {
        $conexao = criarConexao();
        $sql = "INSERT INTO Evento(nome, responsavel, dataHorario, descricao) 
                VALUES(:nome, :responsavel, :dataHorario, :descricao);";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':nome', $nome);
        $sentenca->bindValue(':responsavel', $resp);
        $sentenca->bindValue(':dataHorario', $data);
        $sentenca->bindValue(':descricao', $descricao);
        $sentenca->execute();
        $codigo = $conexao->lastInsertId();
        $conexao = null;
        return $codigo;
    } catch (PDOException $erro) {
        echo($erro);
        return 0;
    }
    
}

function excluir($codigo) {
    try {
        $conexao = criarConexao();
        $sql = "DELETE FROM Evento WHERE codigo = :codigo;";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':codigo', $codigo);
        $sentenca->execute(); 
        $conexao = null;
        return $sentenca->rowCount();
    } catch (PDOException $erro) {
        echo($erro);
        return 0;
    }
    
}

function listar(){
    try{
        $sql = "SELECT * FROM Evento;";

        $conexao = criarConexao();        
        $sentenca = $conexao->prepare($sql);
    
        $sentenca->execute();     
        $conexao = null;
        return $sentenca->fetchAll();
    }catch (PDOException $erro){
        echo ($erro);
    }
}