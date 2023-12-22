<?
include_once "banco.php";
function salvar($codItem, $doc, $descricao) {
    try {
        $conexao = criarConexao();
        $sql = "INSERT INTO Acervo(codigo, documento, descricao, situacao) 
                VALUES(:codigo, :documento, :descricao, :situacao);";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':codigo', $codItem);
        $sentenca->bindValue(':documento', $doc);
        $sentenca->bindValue(':descricao', $descricao);
        $sentenca->bindValue(':situacao', 1);
        $sentenca->execute();
        return $sentenca->rowCount();
    } catch (PDOException $erro) {
        echo $erro;
    }
}

function baixa($codItem, $codDocumento, $justificativa) {
    try {
        $conexao = criarConexao();
        $sql = "UPDATE Acervo SET situacao = :situacao, documentoBaixa = :documentoBaixa, justificativa = :justificativa WHERE codigo = :codigo;";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':situacao', 2);
        $sentenca->bindValue(':documentoBaixa', $codDocumento);
        $sentenca->bindValue(':justificativa', $justificativa);
        $sentenca->bindValue(':codigo', $codItem);
        $sentenca->execute();
        $conexao = null;
        return 2;
    } catch (PDOException $erro) {
        echo($erro);
    }
}

function buscarPorCodigo($id){
    try {
        $conexao = criarConexao();
        $sql = "SELECT * FROM Acervo WHERE codigo = :codigo";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':codigo', $id);
        $sentenca->execute();
        $conexao = null;
        return $sentenca->fetch();
    } catch (PDOException $erro) {
        echo($erro);
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