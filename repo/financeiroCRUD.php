<?
include_once "banco.php";

function salvar($tipo, $valor, $doc, $descricao){
    try {
        $conexao = criarConexao();
        $sql = "INSERT INTO Movimentacao(valor, tipo, codigoDocumento, descricao) 
                VALUES(:valor, :tipo, :codigoDocumento, :descricao);";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':valor', $valor);
        $sentenca->bindValue(':tipo', $tipo);
        $sentenca->bindValue(':codigoDocumento', $doc);
        $sentenca->bindValue(':descricao', $descricao);
        $sentenca->execute();
        $codigo = $conexao->lastInsertId();
        $conexao = null;
        return $codigo;
    } catch (PDOException $erro) {
        echo($erro);
        die();
        return 0;
    }
}
function listarEntrada(){
    try{
        $sql = "SELECT * FROM Movimentacao WHERE tipo = 1;";

        $conexao = criarConexao();        
        $sentenca = $conexao->prepare($sql);
    
        $sentenca->execute();     
        $conexao = null;
        return $sentenca->fetchAll();
    }catch (PDOException $erro){
        echo ($erro);
    }
}

function listarSaida(){
    try{
        $sql = "SELECT * FROM Movimentacao WHERE tipo = 2;";

        $conexao = criarConexao();        
        $sentenca = $conexao->prepare($sql);
    
        $sentenca->execute();     
        $conexao = null;
        return $sentenca->fetchAll();
    }catch (PDOException $erro){
        echo ($erro);
    }
}