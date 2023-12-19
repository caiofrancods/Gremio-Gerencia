<?
include_once "banco.php";
function salvar($tipo, $valor, $doc, $descricao) {
    if($tipo == 1 || $tipo == 2){
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
    }else if($tipo == 3){
        try {
            $conexao = criarConexao();
            $sql = "INSERT INTO Acervo(codigo, codDocumento, descricao) 
                    VALUES(:codigo, :codigoDocumento, :descricao);";
            $sentenca = $conexao->prepare($sql);
            $sentenca->bindValue(':codigo', $valor);
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

function listarAcervo(){
    try{
        $sql = "SELECT * FROM Acervo;";

        $conexao = criarConexao();        
        $sentenca = $conexao->prepare($sql);
    
        $sentenca->execute();     
        $conexao = null;
        return $sentenca->fetchAll();
    }catch (PDOException $erro){
        echo ($erro);
    }
}